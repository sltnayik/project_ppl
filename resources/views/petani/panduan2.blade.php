@extends('petani.layouts.app')
@section('title', 'Panduan')

@section('content')
  <!-- Content Card -->
    <div class="container my-4">
      <div class="card shadow-sm" style="border-radius: 10px; animation: fadeIn 1.5s ease-in-out; padding: 18px">
        <div class="d-flex justify-content-between p-3">
          <img src="{{ asset('assets/busuk_batang.png') }}" class="me-3 rounded" style="width: 100px; height: 100px; object-fit: cover; animation: slideInLeft 1s ease-in-out" alt="Gambar Jagung" />
          <h5 class="fw-bold" style="animation: fadeIn 1.5s ease-in-out">Tata Cara Perawatan Jagung Yang terkena Penyakit Busuk Batang</h5>
          <div class="d-flex gap-3 mt-2" style="animation: slideInRight 1s ease-in-out">
            <i class="bi bi-heart icon" style="font-size: 1.5rem"></i>
            <i class="bi bi-bookmark-fill icon" style="font-size: 1.5rem"></i>
          </div>
        </div>
        <div class="mt-3" style="text-align: justify">
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime soluta reiciendis error nobis dicta, iste fugiat harum consectetur illo earum impedit. Illum perspiciatis harum, beatae dolor facilis, saepe veniam nesciunt sequi,
            aliquam nam dicta ipsum inventore quos. Fuga quae, tempore facilis accusantium magnam totam earum ad tenetur neque aspernatur iusto?
          </p>
        </div>
        <div>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nemo, id dolor asperiores architecto ab animi officiis laboriosam iure numquam, accusantium eligendi porro neque? Tempore voluptate reprehenderit fugit blanditiis ad
          consequatur officia, nihil quos, commodi recusandae mollitia suscipit exercitationem temporibus quidem itaque velit nostrum voluptates unde quasi ratione quam iusto repellendus error ullam! Quos, quod. Magnam harum nisi fuga sed
          odit similique in tempora, animi optio quia voluptas laborum provident necessitatibus vero delectus totam porro doloremque iusto hic veniam aperiam laboriosam quam pariatur.
        </div>
      </div>
    </div>
@endsection
