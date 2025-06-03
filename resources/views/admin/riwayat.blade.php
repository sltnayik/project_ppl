@extends('admin.layouts.app')
@section('title', 'Riwayat')

@section('content')
    <!-- Konten List Analisis -->
    <div class="text-center py-2 rounded"
         style="background-color: #729043; color: white; margin: 20px 40px 0 280px; max-width: calc(100% - 290px);">
      <h5 class="m-0">ANALISIS JAGUNG</h5>
    </div>
    <div class="container my-4 scrollable-content"
         style="margin: 20px 40px 20px 270px; flex-grow: 1; overflow-y: auto; max-width: calc(100% - 300px); max-height: 80vh;">
      <!-- Kartu 1 -->
      <div class="d-flex align-items-center justify-content-between bg-white shadow-sm rounded p-3 mb-3">
        <div class="d-flex align-items-center">
          <h5 class="me-3 mb-3">01</h5>
          <img src="../assets/img/83_busuk-batang-pada-tanaman-jagung 3.png" alt="Busuk Batang" style="border-radius: 8px; width: 60px; height: 60px; object-fit: cover; margin-right: 15px" />
          <div>
            <strong>Jagung Blok A1<br />Busuk Batang</strong><br />
            <small>pukul 09.15 Wib.<br />20, April 2025.</small>
          </div>
        </div>
      </div>
    </div>
@endsection
