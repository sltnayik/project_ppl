<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(Request $request)
{
    $username = $request->input('username');
    $password = $request->input('password');

    // Cek ke tabel petani dulu
    $petaniCredentials = [
        'nama_pengguna_petani' => $username,
        'password' => $password
    ];
    if (Auth::guard('petani')->attempt($petaniCredentials)) {
        return redirect()->route('petani.dashboard');
    }

    // Cek ke tabel admin (misal field username)
    $adminCredentials = [
        'nama_pengguna_admin' => $username,
        'password' => $password
    ];
    if (Auth::guard('admin')->attempt($adminCredentials)) {
        return redirect()->route('admin.dashboard');
    }

    // Jika tidak ditemukan di keduanya
    return back()->withErrors(['login' => 'Nama Pengguna atau Kata Sandi Salah.'])->withInput();
}
}
