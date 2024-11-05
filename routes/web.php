<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/daftar-bahan-baku', function () {
    return view('daftar-bahan-baku');
});

Route::get('/components/bahan-baku/create', function () {
    return view('create');
});