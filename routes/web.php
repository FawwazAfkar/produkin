<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar-bahan-baku', function () {
    return view('daftar-bahan-baku');
});

Route::get('/components/bahan-baku/create', function () {
    return view('create');
});

Route::get('/reset-password', function () {
    return view('reset-password');
});