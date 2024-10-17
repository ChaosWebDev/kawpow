<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoinController;


// ! BASIC ROUTES ! //
Route::get('/', [CoinController::class, 'render'])->name('index');

