@extends('petani.layouts.app')
@section('title', 'Profil Petani')

@section('content')
      <!-- Card -->
      <div class="card mx-auto mt-4" style="width: 500px; background-color: white; border-radius: 15px; padding: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-top: 5px solid #d0d8c1; animation: fadeIn 1.5s ease-in-out">
        <div class="card-body">
          <!-- Profil -->
          <div class="d-flex justify-content-between align-items-center border-bottom mb-1 pb-1">
            <h4 style="font-weight: bold">Anto S.</h4>
            <img src="../assets/img/profile.jpg" alt="Foto Profil" class="img-fluid rounded-circle" style="width: 50px; height: 50px; object-fit: cover; border: 1px solid black" />
          </div>
          <!-- Profil end-->

          <!-- Form -->
          <form class="border-bottom mb-2">
            <fieldset disabled>
              <div class="mb-2">
                <label for="disabledTextInput" class="form-label">Nama Pengguna</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Nama Pengguna" />
              </div>
              <div class="mb-2">
                <label for="disabledTextInput" class="form-label">Password</label>
                <input type="password" id="disabledTextInput" class="form-control" placeholder="Password" />
              </div>
              <div class="mb-2">
                <label for="disabledTextInput" class="form-label">Email</label>
                <input type="email" id="disabledTextInput" class="form-control" placeholder="Email Pengguna" />
              </div>
            </fieldset>
          </form>
          <!-- Form end -->

          <!-- Tombol -->
          <div class="d-flex justify-content-end">
            <button type="button" class="btn me-2" style="background-color: #729043; color: white">Kembali</button>
            <button type="button" class="btn" style="background-color: #af4a4a; color: white" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</button>
          </div>
          <!-- Tombol end -->
        </div>
      </div>
      <!-- Card end -->

      <!-- Modal Logout -->
      <div class="modal fade" id="logoutModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content" style="border-radius: 12px; overflow: hidden">
            <div class="modal-header justify-content-center" style="background-color: #729043">
              <h6 class="modal-title text-white text-center">Apakah anda yakin akan<br />keluar dari akun ini?</h6>
            </div>
            <div class="modal-body text-center">
              <button type="button" class="btn me-2" style="background-color: #729043; color: white; width: 100px" onclick="handleLogout()">Ya</button>
              <button type="button" class="btn" style="background-color: #af4a4a; color: white; width: 100px" data-bs-dismiss="modal">Tidak</button>
            </div>
          </div>
        </div>
      </div>
@endsection
