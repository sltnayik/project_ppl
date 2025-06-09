@extends('petani.layouts.app')
@section('title', 'Scan')

@section('content')
    <!-- Main Content -->
    <div class="container text-center mt-3">
      <!-- Upload Gambar -->
      <form action="{{ route('petani.scan.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mx-auto mb-4" style="max-width: 400px; max-height: 200px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1)">
          <div class="p-2" style="background-color: #729043; color: white; font-weight: bold; border-top-left-radius: 10px; border-top-right-radius: 10px">Upload Gambar</div>
          <div class="p-3 bg-light d-flex flex-column justify-content-center align-items-center" style="height: 150px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px">
            <input type="file" name="gambar" accept="image/*" class="form-control mb-2" required>
          </div>
        </div>
        <div class="mx-auto mb-4" style="max-width: 400px; max-height: 200px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1)">
          <div class="p-2" style="background-color: #729043; color: white; font-weight: bold; border-top-left-radius: 10px; border-top-right-radius: 10px">Tambah Keterangan</div>
          <div class="p-3 bg-light" style="height: 100px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px">
            <input type="text" name="keterangan" class="form-control" placeholder="Masukkan keterangan di sini" style="height: 100%; background-color: #f8f9fa; border: 1px solid #ced4da;">
          </div>
        </div>
        <button type="submit" class="btn mb-2 px-4" style="background-color: #729043; color: #fff">Kirim</button>
      </form>
    </div>
@endsection
