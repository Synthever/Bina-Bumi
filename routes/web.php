<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/', function () {
    return view('home.home');
})->name('dashboard');

Route::get('/reward', function () {
    return view('home.reward');
})->name('reward');

Route::post('/register/submit/', [AuthController::class, 'register_submit'])->name('register_submit');

Route::post('/login/submit/', [AuthController::class, 'login_submit'])->name('login_submit');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');