@extends('petani.layouts.app')
@section('title', 'Scan')

@section('content')
    <!-- Main Content -->
    <div class="container text-center mt-3">
      <!-- Upload Gambar -->
      <div class="mx-auto mb-4" style="max-width: 400px; max-height: 200px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1)">
        <div class="p-2" style="background-color: #729043; color: white; font-weight: bold; border-top-left-radius: 10px; border-top-right-radius: 10px">Upload Gambar</div>
        <div class="p-3 bg-light d-flex flex-column" style=" ;height: 150px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px">
            <button class="btn btn-secondary"><i class="bi bi-upload" style="font-size: 60px"></i></button>
        </div>
      </div>
      <div class="mx-auto mb-4" style="max-width: 400px; max-height: 200px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1)">
        <div class="p-2" style="background-color: #729043; color: white; font-weight: bold; border-top-left-radius: 10px; border-top-right-radius: 10px">Tambah Keterangan</div>
        <div class="p-3 bg-light" style="height: 100px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px">
          <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi, accusamus.</span>
        </div>
      </div>
      <button type="button" class="btn mb-2 px-4" style="background-color: #729043; color: #fff">Kirim</button>
    </div>
@endsection
