@extends('petani.layouts.app')
@section('title', 'Panduan')

@section('content')
    <style>
        .scrollable-content {
        height: calc(100vh - 150px); /* Sesuaikan tinggi agar tidak menabrak header dan footer */
        overflow-y: auto; /* Aktifkan scroll vertikal */
        padding: 20px;
      }
    </style>
    <!-- Content Card -->
    <div class="container scrollable-content" style="margin: 20px auto">
      <div class="card shadow-sm p-4" style="border-radius: 10px; animation: fadeIn 1.5s ease-in-out">
        <div class="d-flex justify-content-between p-3">
          <img src="../assets/img/83_busuk-batang-pada-tanaman-jagung 3.png" class="me-3 rounded" style="width: 100px; height: 100px; object-fit: cover; animation: slideInLeft 1s ease-in-out" alt="Gambar Jagung" />
          <h5 class="fw-bold" style="animation: fadeIn 1.5s ease-in-out">Tata Cara Perawatan Jagung Yang terkena Penyakit Busuk Batang</h5>
          <div class="d-flex gap-3 mt-2" style="animation: slideInRight 1s ease-in-out">
            <i class="bi bi-heart icon" style="font-size: 1.5rem"></i>
            <i class="bi bi-bookmark icon" style="font-size: 1.5rem"></i>
          </div>
        </div>
        <div class="mt-3" style="text-align: justify">
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime soluta reiciendis error nobis dicta, iste fugiat harum consectetur illo earum impedit. Illum perspiciatis harum, beatae dolor facilis, saepe veniam nesciunt sequi,
            aliquam nam dicta ipsum inventore quos. Fuga quae, tempore facilis accusantium magnam totam earum ad tenetur neque aspernatur iusto?
          </p>
        </div>
      </div>
      <div class="card shadow-sm p-4" style="border-radius: 10px; animation: fadeIn 1.5s ease-in-out">
        <div class="d-flex justify-content-between p-3">
          <img src="../assets/img/83_busuk-batang-pada-tanaman-jagung 3.png" class="me-3 rounded" style="width: 100px; height: 100px; object-fit: cover; animation: slideInLeft 1s ease-in-out" alt="Gambar Jagung" />
          <h5 class="fw-bold" style="animation: fadeIn 1.5s ease-in-out">Tata Cara Perawatan Jagung Yang terkena Penyakit Busuk Batang</h5>
          <div class="d-flex gap-3 mt-2" style="animation: slideInRight 1s ease-in-out">
            <i class="bi bi-heart icon" style="font-size: 1.5rem"></i>
            <i class="bi bi-bookmark icon" style="font-size: 1.5rem"></i>
          </div>
        </div>
        <div class="mt-3" style="text-align: justify">
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime soluta reiciendis error nobis dicta, iste fugiat harum consectetur illo earum impedit. Illum perspiciatis harum, beatae dolor facilis, saepe veniam nesciunt sequi,
            aliquam nam dicta ipsum inventore quos. Fuga quae, tempore facilis accusantium magnam totam earum ad tenetur neque aspernatur iusto?
          </p>
        </div>
      </div>
      <div class="card shadow-sm p-4" style="border-radius: 10px; animation: fadeIn 1.5s ease-in-out">
        <div class="d-flex justify-content-between p-3">
          <img src="../assets/img/83_busuk-batang-pada-tanaman-jagung 3.png" class="me-3 rounded" style="width: 100px; height: 100px; object-fit: cover; animation: slideInLeft 1s ease-in-out" alt="Gambar Jagung" />
          <h5 class="fw-bold" style="animation: fadeIn 1.5s ease-in-out">Tata Cara Perawatan Jagung Yang terkena Penyakit Busuk Batang</h5>
          <div class="d-flex gap-3 mt-2" style="animation: slideInRight 1s ease-in-out">
            <i class="bi bi-heart icon" style="font-size: 1.5rem"></i>
            <i class="bi bi-bookmark icon" style="font-size: 1.5rem"></i>
          </div>
        </div>
        <div class="mt-3" style="text-align: justify">
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime soluta reiciendis error nobis dicta, iste fugiat harum consectetur illo earum impedit. Illum perspiciatis harum, beatae dolor facilis, saepe veniam nesciunt sequi,
            aliquam nam dicta ipsum inventore quos. Fuga quae, tempore facilis accusantium magnam totam earum ad tenetur neque aspernatur iusto?
          </p>
        </div>
      </div>
      <div class="card shadow-sm p-4" style="border-radius: 10px; animation: fadeIn 1.5s ease-in-out">
        <div class="d-flex justify-content-between p-3">
          <img src="../assets/img/83_busuk-batang-pada-tanaman-jagung 3.png" class="me-3 rounded" style="width: 100px; height: 100px; object-fit: cover; animation: slideInLeft 1s ease-in-out" alt="Gambar Jagung" />
          <h5 class="fw-bold" style="animation: fadeIn 1.5s ease-in-out">Tata Cara Perawatan Jagung Yang terkena Penyakit Busuk Batang</h5>
          <div class="d-flex gap-3 mt-2" style="animation: slideInRight 1s ease-in-out">
            <i class="bi bi-heart icon" style="font-size: 1.5rem"></i>
            <i class="bi bi-bookmark icon" style="font-size: 1.5rem"></i>
          </div>
        </div>
        <div class="mt-3" style="text-align: justify">
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime soluta reiciendis error nobis dicta, iste fugiat harum consectetur illo earum impedit. Illum perspiciatis harum, beatae dolor facilis, saepe veniam nesciunt sequi,
            aliquam nam dicta ipsum inventore quos. Fuga quae, tempore facilis accusantium magnam totam earum ad tenetur neque aspernatur iusto?
          </p>
        </div>
      </div>
      <!-- Tambahkan lebih banyak card jika diperlukan -->
    </div>
@endsection
