<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnalisisTanaman;
use Illuminate\Support\Facades\Auth;
use App\Models\Petani;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        $petanis = \App\Models\Petani::all();
        return view('admin.dashboard', compact('petanis'));
    }

    public function profil()
    {
        return view('admin.profil admin');
    }

    public function tambah()
    {
        return view('admin.tambah petani');
    }
    public function storepetani(Request $request)
    {
        $request->validate([
            'nama_petani' => 'required|string|max:255',
            'nama_pengguna_petani' => 'required|string|max:255|unique:petanis,nama_pengguna_petani',
            'no_hp' => 'required|string|min:8',
            'password' => 'required|string|min:8',
        ]);

        $petani = new Petani();
        $petani->nama_petani = $request->nama_petani;
        $petani->nama_pengguna_petani = $request->nama_pengguna_petani;
        $petani->no_hp = $request->no_hp;
        $petani->password = Hash::make($request->password);
        $petani->save();

        return response()->json(['success' => true, 'message' => 'Petani berhasil ditambahkan.']);
    }

    public function edit($id)
    {
        $petani = \App\Models\Petani::findOrFail($id);
        return view('admin.edit petani', compact('petani'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_petani' => 'required|string|max:255',
            'nama_pengguna_petani' => 'required|string|max:255|unique:petanis,nama_pengguna_petani,'.$id.',id_petani',
            'no_hp' => 'required|string|min:8',
            'password' => 'nullable|string|min:8',
        ]);

        $petani = \App\Models\Petani::findOrFail($id);
        $petani->nama_petani = $request->nama_petani;
        $petani->nama_pengguna_petani = $request->nama_pengguna_petani;
        $petani->no_hp = $request->no_hp;
        if ($request->filled('password')) {
            $petani->password = \Hash::make($request->password);
        }
        $petani->save();

        return response()->json(['success' => true, 'message' => 'Data petani berhasil diupdate.']);
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
    public function destroy($id)
    {
        $petani = \App\Models\Petani::findOrFail($id);
        $petani->delete();

        return response()->json(['success' => true]);
    }
}
