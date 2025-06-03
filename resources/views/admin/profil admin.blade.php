@extends('admin.layouts.app')
@section('title', 'Profil Admin')

@section('content')
    <!-- Isi Profil -->
    <div class="container">
      <div class="profile-card mx-auto"
        style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0px 4px 10px rgba(0,0,0,0.1); margin-top: 30px; max-width: 500px;">
        <form id="formProfil">
          <div class="mb-3">
            <label for="namaPengguna" class="form-label" style="font-weight: bold; margin-top: 10px;">Nama Pengguna</label>
            <input type="text" id="namaPengguna" class="form-control" value="" required
              style="background-color: #eef2e6;">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label" style="font-weight: bold; margin-top: 10px;">Password</label>
            <input type="password" id="password" class="form-control" value="" required
              style="background-color: #eef2e6;">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label" style="font-weight: bold; margin-top: 10px;">Email</label>
            <input type="email" id="email" class="form-control" value="" required
              style="background-color: #eef2e6;">
          </div>

          <!-- Tombol Kembali di kanan -->
          <div class="d-flex justify-content-end">
            <a type="button" class="btn btn-back"
              href="{{ route('admin.dashboard') }}"
              style="background-color: #789448; color: white; border-radius: 10px; margin-top: 20px; float: right;"
              onmouseover="this.style.backgroundColor='#5e7d36'"
              onmouseout="this.style.backgroundColor='#789448'">
              Kembali
            </a>
          </div>
        </form>
      </div>
    </div>
@endsection
