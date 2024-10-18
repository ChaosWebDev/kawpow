<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoinController;
use App\Http\Controllers\WalletController;


// ! BASIC ROUTES ! //
Route::get('/', [CoinController::class, 'render'])->name('index');
Route::post('/wallet/set',[WalletController::class, 'store'])->name('wallet.set');
