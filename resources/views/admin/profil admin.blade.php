@php($hideSidebar = true)
@extends('admin.layouts.app')
@section('title', 'Profil Admin')

@section('content')
    <style>
    .profile-card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        margin-top: 30px;
      }
      label {
        font-weight: bold;
        margin-top: 10px;
      }
      input.form-control {
        background-color: #eef2e6;
      }
      .btn-back {
        background-color: #789448;
        color: white;
        border-radius: 10px;
        margin-top: 20px;
        float: right; /* Biar tombol di kanan */
      }
      .btn-back:hover {
        background-color: #5e7d36;
      }
    </style>
    <!-- Isi Profil -->
    <div class="container">
      <div class="profile-card mx-auto" style="max-width: 500px">
        <form id="formProfil">
          <div class="mb-3">
            <label for="namaPengguna" class="form-label">Nama Pengguna</label>
            <input type="text" id="namaPengguna" class="form-control" value="" required />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" class="form-control" value="" required />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" class="form-control" value="" required />
          </div>

          <!-- Tombol Kembali di kanan -->
          <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-back" onclick="goBack()">Kembali</button>
          </div>
        </form>
      </div>
    </div>

    <script>
      function goBack() {
        window.location.href = "Dashboard Admin.html"; // Kembali ke dashboard admin
      }
    </script>
@endsection
