<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware(["auth"])->group(function () {
    Route::get('/', [BeritaController::class, 'dashboard'])->name('dashboard');
    Route::get('/deteksi', [BeritaController::class, 'deteksi'])->name('deteksi');
    Route::resource('berita', BeritaController::class);
});
