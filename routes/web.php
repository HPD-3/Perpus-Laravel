<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AuthController; // tambah ini

Route::get('/', function () {
    return view('app');
});


// Halaman Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);



// Resource Buku
Route::resource('buku', BukuController::class);
