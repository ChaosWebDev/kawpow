<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoinController;
use App\Http\Controllers\AdminController;

Route::get('/{coin}', [CoinController::class, 'render'])->name('coin.show');



// ! ADMIN ROUTES ! //
Route::get('/login', [AdminController::class, 'render'])->name('login');
Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin', function () {
    return redirect()->route('login');
});
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin');
    Route::post('/pool/store', [AdminController::class, 'store'])->name('admin.pool.store');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::put('/pool/update/{coin}', [AdminController::class, 'update'])->name('admin.pool.update');
    Route::delete('/pool/destroy', [AdminController::class, 'destroy'])->name('admin.pool.destroy');
});
