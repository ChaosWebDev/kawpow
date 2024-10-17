<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use Illuminate\Http\Request;

class CoinController extends Controller
{
    public function render(Coin $coin) {
        return view('index', compact('coin'));
    }
}
