@extends('petani.layouts.app')
@section('title', 'Hasil Analisis')

@section('content')
<div class="container" style="margin-top: 40px;">
  <div class="row justify-content-center align-items-start">
    <!-- Kiri: Tingkat Kesehatan & Jenis Penyakit -->
    <div class="col-md-6 mb-4">
        <!-- Jenis Penyakit -->
        <div style="max-width: 500px; margin:5px 0;">
          <div class="p-2 text-center" style="background-color: #729043; color: white; font-weight: bold; border-top-left-radius: 10px; border-top-right-radius: 10px;">
            Jenis Penyakit
          </div>
          <div class="p-3 text-start" style="border: 1px solid #ddd; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; background-color: white; min-height:125px;">
            <p style="margin: 0">
              Jenis penyakit di atas mengarah kepada {{ $jenis_penyakit ?? '-' }}
            </p>
          </div>
        </div>
      <!-- Tingkat Kesehatan -->
      <div class="mb-4" style="max-width: 500px; margin:5px 0;">
        <div class="p-2 text-center" style="background-color: #729043; color: white; font-weight: bold; border-top-left-radius: 10px; border-top-right-radius: 10px">
          Tingkat Kesehatan
        </div>
        <div class="p-3 text-start" style="border: 1px solid #ddd; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; background-color: white; min-height:125px;">
          <p style="margin: 0;">
            Tingkat Kesehatan Jagung di atas sebesar {{ $tingkat_kesehatan ?? '-' }}.
          </p>
        </div>
      </div>
    </div>
    <!-- Kanan: Gambar & Tombol Solusi -->
    <div class="col-md-6 d-flex flex-column align-items-center">
      <div class="mb-4" style="width: 100%; max-width: 400px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1)">
        <div class="p-2 text-center" style="background-color: #729043; color: white; font-weight: bold; border-top-left-radius: 10px; border-top-right-radius: 10px">
          Upload Gambar
        </div>
        <div class="p-3 bg-light" style="height: 200px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; display: flex; align-items: center; justify-content: center;">
          <img src="{{ asset('storage/' . $gambar) }}" alt="Gambar Hasil Upload"
               style="max-width:100%; max-height:100%; object-fit:contain; border-radius:8px;" />
        </div>
      </div>
      <a href="{{ route('petani.solusi', ['penyakit' => $jenis_penyakit]) }}" class="btn btn-success mt-2" style="background-color: #729043; border-radius: 50px; padding: 10px 30px; font-weight: bold;">
        <i class="bi bi-lightbulb"></i> Lihat Solusi
      </a>
    </div>
  </div>
</div>
@endsection
