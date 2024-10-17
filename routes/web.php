<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoinController;

Route::get('/{coin}', [CoinController::class, 'render'])->name('coin.show');
