<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class petaniController extends Controller
{
    public function dashboard()
    {
        return view('petani.dashboard');
    }

    public function profil()
    {
        return view('petani.profil');
    }

    public function scan()
    {
        return view('petani.scan');
    }

    public function riwayat()
    {
        return view('petani.riwayat');
    }

    public function panduan()
    {
        return view('petani.panduan');
    }

    public function panduan2()
    {
        return view('petani.panduan2');
    }

    public function hasilanalisis()
    {
        return view('petani.hasilanalisis');
    }

    public function solusi()
    {
        return view('petani.solusi');
    }
}
