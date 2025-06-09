@extends('petani.layouts.app')
@section('title', 'Solusi Penyakit')

@section('content')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header text-center" style="background-color:#729043; color:white; border-top-left-radius:1rem; border-top-right-radius:1rem;">
                    <h3 class="mb-0">
                        <i class="bi bi-lightbulb-fill me-2"></i>
                        Solusi Penyakit: <span style="color:#ffe066;">{{ $jenis_penyakit }}</span>
                    </h3>
                </div>
                <div class="card-body p-4" style="background-color:#f8f9fa;">
                    @if($solusi)
                        <div class="mb-4">
                            <h5 class="fw-bold text-success"><i class="bi bi-exclamation-circle me-2"></i>Penyebab</h5>
                            <div class="ps-3">{!! nl2br(e($solusi->penyebab)) !!}</div>
                        </div>
                        <div class="mb-4">
                            <h5 class="fw-bold text-warning"><i class="bi bi-emoji-frown me-2"></i>Gejala</h5>
                            <div class="ps-3">{!! nl2br(e($solusi->gejala)) !!}</div>
                        </div>
                        <div>
                            <h5 class="fw-bold text-primary"><i class="bi bi-tools me-2"></i>Solusi</h5>
                            <div class="ps-3">{!! nl2br(e($solusi->solusi)) !!}</div>
                        </div>
                    @else
                        <div class="alert alert-warning text-center my-4">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            Data solusi tidak ditemukan.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
