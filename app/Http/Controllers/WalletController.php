<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function store(Request $request) {
        $request->validate(['wallet'=>['required','string']]);

        session()->flush();
        session()->put('wallet',$request->input('wallet'));

        return redirect()->back();
    }
}
