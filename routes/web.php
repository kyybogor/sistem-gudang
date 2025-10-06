<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [UserController::class, 'authenticate'])->name('login.post');

Route::get('/dashboard', function () {
    if (!session()->has('user')) {
        return redirect('/login');
    }

    return view('dashboard', [
        'user' => session('user')
    ]);
})->name('dashboard');

Route::get('/logout', function () {
    session()->forget('user');
    return redirect()->route('login');
})->name('logout');
