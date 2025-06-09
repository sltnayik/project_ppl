<?php

namespace App\Http\Controllers;

use App\Models\AnalisisTanaman;
use App\Models\SolusiPenyakit;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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
        $riwayat = AnalisisTanaman::where('id_petani', Auth::guard('petani')->id())
            ->orderBy('tanggal_waktu_analisis', 'desc')
            ->get();

        return view('petani.riwayat', compact('riwayat'));
    }

    public function panduan()
    {
        return view('petani.panduan');
    }

    public function panduan2()
    {
        return view('petani.panduan2');
    }

    public function hasilanalisis(Request $request)
    {
        return view('petani.hasilanalisis', [
            'gambar' => session('gambar'),
            'jenis_penyakit' => session('jenis_penyakit'),
            'tingkat_kesehatan' => session('tingkat_kesehatan'),
            'keterangan' => session('keterangan'),
        ]);
    }

    public function solusi(Request $request)
    {
        $jenis_penyakit = $request->query('penyakit');
        $nama_penyakit = trim(preg_replace('/\s*\(.+\)$/', '', $jenis_penyakit));

        // Mapping label AI ke nama penyakit di database
        $mapping = [
            'Common_Rust' => 'Karat Daun',
            'Blight' => 'Hawar Daun',
            'Gray_Leaf_Spot' => 'Bercak Daun',
        ];
        $nama_db = $mapping[$nama_penyakit] ?? $nama_penyakit;

        $penyakit = \App\Models\Penyakit::whereRaw('LOWER(TRIM(nama_penyakit)) = ?', [strtolower(trim($nama_db))])->first();

        $solusi = null;
        if ($penyakit) {
            $solusi = \App\Models\SolusiPenyakit::where('id_penyakit', $penyakit->id_penyakit)->first();
        }

        return view('petani.solusi', [
            'jenis_penyakit' => $nama_db,
            'solusi' => $solusi
        ]);
    }

    // Method to handle the upload of scanned images
    public function uploadScan(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keterangan' => 'nullable|string'
        ]);

        // Simpan file ke storage/app/public/gambar/
        $path = $request->file('gambar')->store('gambar', 'public');
        $fullPath = storage_path('app/public/' . $path);

        // Kirim ke Flask API
        try {
            $response = Http::attach(
                'image', file_get_contents($fullPath), basename($fullPath)
            )->post('http://127.0.0.1:5000/predict');

            // Log the response from Flask
            Log::info('Flask response:', ['body' => $response->body()]);

            if ($response->successful()) {
                $result = $response->json();
                // Bulatkan persen tanpa desimal
                $tingkat_kesehatan = isset($result['health_score']) ? round($result['health_score']) . '%' : '-';
                $jenis_penyakit = $result['label'] ?? '-';
            } else {
                Log::error('Flask error', [
                    'status' => $response->status(),
                    'body' => $response->body()
                ]);
                $tingkat_kesehatan = '-';
                $jenis_penyakit = 'Gagal analisis AI';
            }
        } catch (\Exception $e) {
            $tingkat_kesehatan = '-';
            $jenis_penyakit = 'Error: ' . $e->getMessage();
        }

        // Simpan ke database
        AnalisisTanaman::create([
            'id_petani' => Auth::guard('petani')->id(),
            'tanggal_waktu_analisis' => now(),
            'gambar' => $path,
            'hasil_deteksi' => $jenis_penyakit . ' (' . $tingkat_kesehatan . ')',
            'keterangan' => $request->keterangan,
        ]);

        // Redirect ke halaman solusi sesuai penyakit hasil analisis
        return redirect()->route('petani.hasilanalisis')->with([
            'gambar' => $path,
            'jenis_penyakit' => $jenis_penyakit,
            'tingkat_kesehatan' => $tingkat_kesehatan,
            'keterangan' => $request->keterangan,
        ]);
    }

    // Contoh fungsi analisis AI (dummy, ganti dengan model asli)
    private function analyzeImageAI($imagePath)
    {
        // Panggil model AI di sini, misal pakai Python, TensorFlow, dsb.
        // Return array: ['tingkat_kesehatan' => ..., 'jenis_penyakit' => ...]
    }
}
