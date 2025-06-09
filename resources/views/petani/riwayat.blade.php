@extends('petani.layouts.app')
@section('title', 'Riwayat')

@section('content')
<div class="container-fluid d-flex flex-column" style="min-height: 80vh;">
    <!-- Judul selalu di atas -->
    <div class="text-center py-2 rounded shadow-sm"
         style="background-color: #729043; color: white; margin: 20px 80px 0 80px; position: sticky; top: 0; z-index: 2;">
      <h5 class="m-0">ANALISIS JAGUNG</h5>
    </div>
    <!-- Scrollable Riwayat -->
    <div class="flex-grow-1" style="margin: 0 80px 20px 80px;">
      <div class="scrollable-content" style="max-height: 60vh; overflow-y: auto; padding-top: 20px;">
        @forelse($riwayat as $item)
        <div class="d-flex align-items-center justify-content-between bg-white shadow-sm rounded p-3 mb-3">
            <div class="d-flex align-items-center">
                <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar" style="border-radius: 8px; width: 60px; height: 60px; object-fit: cover; margin-right: 15px" />
                <div>
                    <strong>{{ $item->hasil_deteksi }}</strong><br />
                    <small>{{ $item->tanggal_waktu_analisis }}</small><br />
                    @if($item->keterangan)
                        <small class="text-muted">Keterangan: {{ $item->keterangan }}</small>
                    @endif
                </div>
            </div>
        </div>
        @empty
        <div class="text-center text-muted py-5">Belum ada riwayat analisis.</div>
        @endforelse
      </div>
    </div>
</div>
@endsection
