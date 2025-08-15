<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\AuthController; // tambah ini
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Halaman Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Halaman Home
Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

// Resource Buku
Route::resource('buku', BukuController::class);
