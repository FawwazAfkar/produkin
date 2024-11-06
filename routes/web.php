<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordResetController;

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

Route::get('/daftar-produksi', function () {
    return view('daftar-produksi');
})->name('daftar-produksi');

Route::get('/daftar-pesanan', function () {
    return view('daftar-pesanan');
})->name('daftar-pesanan');

Route::get('/components/produksi/create', function () {
    return view('components.produksi.create');
})->name('create-produksi');

Route::get('/components/produksi/edit', function () {
    return view('components.produksi.edit');
})->name('edit-produksi');

Route::get('/components/user/create', function () {
    return view('components.user.create');
})->name('create-user');

// Route untuk halaman form create bahan baku
Route::get('/components/bahan-baku/create', function () {
    return view('components.bahan-baku.create');
})->name('create-bahan-baku');

Route::get('/components/user/edit', function () {
    return view('components.user.edit');
})->name('edit-user');

Route::get('/components/bahan-baku/edit', function () {
    return view('components.bahan-baku.edit');
})->name('edit-bahan-baku');


// Route untuk memproses reset password
Route::get('reset-password', [PasswordResetController::class, 'showResetForm'])->name('password.reset');
Route::post('reset-password', [PasswordResetController::class, 'reset'])->name('password.update');

//route daftar produk jadi
Route::get('/daftar-produk-jadi', function () {
    return view('daftar-produk-jadi');
})->name('daftar-produk-jadi');

// Route untuk halaman daftar alat
Route::get('/daftar-alat', function () {
    return view('daftar-alat');
})->name('daftar-alat');