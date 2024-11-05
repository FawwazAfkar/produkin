<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Jika login berhasil, redirect ke halaman beranda
        return redirect()->route('beranda');
    }

    // Jika login gagal, kembalikan ke halaman login dengan pesan error
    return redirect()->route('login')->withErrors([
        'email' => 'Email atau password salah.',
    ]);
}

}
