<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordResetController;

// Login
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [UserController::class, 'authenticate'])->name('login.post');

// Dashboard
Route::get('/dashboard', function () {
    if (!session()->has('user')) {
        return redirect('/login');
    }

    return view('dashboard', [
        'user' => session('user')
    ]);
})->name('dashboard');

// Logout
Route::get('/logout', function () {
    session()->forget('user');
    return redirect()->route('login');
})->name('logout');

// Forgot Password & OTP
Route::get('forgot-password', fn() => view('auth.forgot-password'))->name('password.request');
Route::post('forgot-password', [PasswordResetController::class, 'requestOtp'])->name('password.otp');

Route::get('verify-otp', fn() => view('auth.verify-otp'))->name('password.verify.form');
Route::post('verify-otp', [PasswordResetController::class, 'verifyOtp'])->name('password.verify');

Route::get('reset-password', fn() => view('auth.reset-password'))->name('password.reset.form');
Route::post('reset-password', [PasswordResetController::class, 'resetPassword'])->name('password.reset');
