<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

// Route untuk halaman login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/daftar-bahan-baku', function () {
    return view('daftar-bahan-baku');
})->name('daftar-bahan-baku');

// Route untuk halaman form create bahan baku
Route::get('/components/bahan-baku/create', function () {
    return view('create');
})->name('create-bahan-baku');

// Route untuk halaman reset password
Route::get('/reset-password', function () {
    return view('reset-password');
})->name('password.reset');
