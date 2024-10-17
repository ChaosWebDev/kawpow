<?php

namespace App\Http\Controllers;

class CoinController extends Controller
{
    public function render() {
        $coin = config('coin');
        return view('index', compact('coin'));
    }
}
