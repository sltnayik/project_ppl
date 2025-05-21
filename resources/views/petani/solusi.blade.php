@extends('petani.layouts.app')
@section('title', 'Solusi')

@section('content')
    <!-- Main Content -->
    <div class="container text-center" style="margin-top: 25px">
      <!-- Upload Gambar -->
      <div class="mx-auto mb-4" style="max-width: 400px; max-height: 200px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1)">
        <div class="p-2" style="background-color: #729043; color: white; font-weight: bold; border-top-left-radius: 10px; border-top-right-radius: 10px">Upload Gambar</div>
        <div class="p-3 bg-light" style="height: 150px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px">
          <img src="../assets/img/83_busuk-batang-pada-tanaman-jagung 3.png" alt="Jagung" class="img-fluid" />
        </div>
      </div>

      <div class="row justify-content-center">
        <!-- Tingkat Kesehatan -->
        <div class="col-md-4" style="max-width: 400px; height: 200px">
          <div class="p-2" style="background-color: #729043; color: white; font-weight: bold; border-top-left-radius: 10px; border-top-right-radius: 10px">Tingkat Kesehatan</div>
          <div class="p-3 text-start" style="border: 1px solid #ddd; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; background-color: white; height: 150px">
            <p style="margin: 0; font-weight: bold">Tingkat Kesehatan Jagung di atas sebesar 65%.</p>
          </div>
        </div>

        <!-- Jenis Penyakit -->
        <div class="col-md-4" style="max-width: 400px; height: 200px">
          <div class="p-2" style="background-color: #729043; color: white; font-weight: bold; border-top-left-radius: 10px; border-top-right-radius: 10px">Jenis Penyakit</div>
          <div class="p-3 text-start" style="border: 1px solid #ddd; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; background-color: white; height: 150px">
            <p style="margin: 0">
              Jenis penyakit di atas mengarah kepada <strong><em>penyakit busuk batang.</em></strong>
            </p>
          </div>
        </div>
      </div>
    </div>
@endsection()
