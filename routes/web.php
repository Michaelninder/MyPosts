<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Public Auth Routes
Route::get('/login', fn () => view('auth.login'))->name('auth.login');
Route::get('/register', fn () => view('auth.register'))->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login.post');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register.post');

// Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

    // Dashboard
    Route::get('/dashboard', fn () => view('dashboard.overview'))->name('dashboard.overview');
});

// Legal Pages
Route::view('/imprint', 'legal.imprint')->name('legal.imprint');
Route::view('/privacy', 'legal.privacy')->name('legal.privacy');
Route::view('/terms', 'legal.terms')->name('legal.terms');

// Home Page
Route::view('/', 'pages.home')->name('pages.home');
