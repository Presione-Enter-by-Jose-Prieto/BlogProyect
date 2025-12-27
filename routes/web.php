<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return redirect()->route('home.index');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login-form');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [LoginController::class, 'showRegisterForm'])->name('register-form');
Route::post('/register', [LoginController::class, 'register'])->name('register');

Route::get('/posts', [BlogController::class, 'index'])->name('home.index');

Route::resource('posts', PostController::class)->except(['index']);