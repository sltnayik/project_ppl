<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function profil()
    {
        return view('admin.profil admin');
    }

    public function tambah()
    {
        return view('admin.tambah petani');
    }

    public function edit()
    {
        return view('admin.edit petani');
    }

    public function riwayat()
    {
        return view('admin.riwayat');
    }
}
