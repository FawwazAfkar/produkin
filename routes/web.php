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

Route::get('/daftar-pesanan', function () {
    return view('daftar-pesanan');
})->name('daftar-pesanan');

Route::get('/components/pesanan/create', function () {
    return view('components.pesanan.create');
})->name('create-pesanan');

// Route untuk halaman form create bahan baku
Route::get('/components/bahan-baku/create', function () {
    return view('create');
})->name('create-bahan-baku');

Route::get('/components/user/edit', function () {
    return view('components.user.edit');
})->name('edit-user');


// Route untuk halaman reset password
Route::get('/reset-password', function () {
    return view('reset-password');
})->name('password.reset');
