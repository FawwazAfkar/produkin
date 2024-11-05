<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Redirect ke halaman login saat mengakses root URL
Route::get('/', function () {
    return redirect()->route('login');
});

// Route untuk menampilkan halaman login (GET)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Route untuk memproses login (POST)
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Route untuk menampilkan halaman beranda setelah login
Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');


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
    return view('components.bahan-baku.create');
})->name('create-bahan-baku');

Route::get('/components/user/edit', function () {
    return view('components.user.edit');
})->name('edit-user');


// Route untuk halaman reset password
Route::get('/reset-password', function () {
    return view('reset-password');
})->name('password.reset');

// Route untuk halaman daftar alat
Route::get('/daftar-alat', function () {
    return view('daftar-alat');
})->name('daftar-alat');