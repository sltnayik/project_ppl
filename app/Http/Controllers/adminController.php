<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnalisisTanaman;
use Illuminate\Support\Facades\Auth;

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
        $riwayat = AnalisisTanaman::orderBy('tanggal_waktu_analisis', 'desc')->get();
        return view('admin.riwayat', compact('riwayat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keterangan' => 'required|string|max:255',
        ]);

        $path = $request->file('gambar')->store('images', 'public');

        $jenis_penyakit = 'Contoh Penyakit';
        $tingkat_kesehatan = 'Baik';

        AnalisisTanaman::create([
            'id_petani' => Auth::guard('petani')->id(),
            'tanggal_waktu_analisis' => now(),
            'gambar' => $path,
            'hasil_deteksi' => $jenis_penyakit . ' (' . $tingkat_kesehatan . ')',
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan.');
    }
}
