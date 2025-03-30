<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [AuthController::class, 'showRegister']); // display halaman register
Route::post('/register', [AuthController::class, 'register']); // form register
Route::get('/login', [AuthController::class, 'showLogin'])->name('login'); // display halaman login
Route::post('/login', [AuthController::class, 'login']); // form login
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth'); // logout, middleware('auth') artinya ini hanya bisa jika usernya sudah kelogin
Route::get('/home', function() {
    return view('home');
})->middleware('auth'); // display halaman home dan middleware('auth') ditambahkan agar hanya user yang sudah login bisa lihat halaman ini
