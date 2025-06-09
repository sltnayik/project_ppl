<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = [
            'nama_pengguna_petani' => $request->input('username'),
            'password' => $request->input('password')
        ];

        if (Auth::guard('petani')->attempt($credentials)) {
            // sukses login
            return redirect()->route('petani.dashboard');
        } else {
            // gagal login
            return back()->withErrors(['login' => 'Nama Pengguna atau Kata Sandi Salah.'])->withInput();
        }
    }
}
