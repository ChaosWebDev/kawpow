<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use Illuminate\Http\Request;
use App\Http\Requests\PoolRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function render()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string', 'exists:users,username'],
            'password' => ['required', 'string']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('admin');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function settings()
    {
        $coins = Coin::orderBy('pool_name')->get();
        return view('admin.admin', compact('coins'));
    }

    public function update(Request $request, Coin $coin)
    {
        session()->forget('pool');

        $validated = $request->validated();

        if ($request->hasFile('icon_url')) {
            $request->validate([
                'icon_url' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $extension = $request->file('icon_url')->getClientOriginalExtension();

            if ($coin->icon_url && Storage::disk('public')->exists($coin->icon_url)) {
                Storage::disk('public')->delete($coin->icon_url);
            }

            $filePath = $request->file('icon_url')->storeAs(
                'uploaded',
                "{$validated['symbol']}-icon.{$extension}",
                'public'
            );

            $validated['icon_url'] = $filePath;
        }

        $coin->update($validated);
        return redirect()->route('admin')->with(['success' => 'Pool updated successfully!', 'updated_coin' => $coin->symbol]);
    }


    public function store(Request $request)
    {
        session()->forget('pool');
        $validated = $request->validated();

        $extension = $request->file('icon_url')->getClientOriginalExtension();

        $request->validate([
            'icon_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $filePath = $request->file('icon_url')->storeAs(
            'uploaded',
            "{$validated['symbol']}-icon.{$extension}",
            'public'
        );
        $validated['icon_url'] = $filePath;

        Coin::create($validated);

        return redirect()->route('admin');
    }

    public function destroy(Request $request)
    {
        $id = $request->validate(['id' => ['required', 'integer', 'exists:coins,id']]);
        $coin = Coin::find($id)->firstOrFail();
        $name = $coin->pool_name;
        $coin->delete();
        return back()->with(['message', "Pool: {$name} deleted successfully."]);
    }
}
