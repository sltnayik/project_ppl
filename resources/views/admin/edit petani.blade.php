@extends('admin.layouts.app')
@section('title', 'Update Petani')

@section('content')
  <style>
    .form-container {
      max-width: 600px;
      margin: 0 auto;
      background: #f5f9ef;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .form-title {
      margin-bottom: 20px;
      color: #789448;
      text-align: center;
      font-weight: bold;
    }
    .btn-save, .btn-back {
      width: 48%;
    }
    .btn-save {
      background-color: #789448;
      color: white;
      border: none;
    }
    .btn-save:hover {
      background-color: #5e7d36;
    }
    .btn-back {
      background-color: #789448; /* UBAH ke hijau */
      color: white;
      border: none;
    }
    .btn-back:hover {
      background-color: #5e7d36; /* Hover juga hijau tua */
    }
    /* Modal Custom */
    .modal-header {
      background-color: #789448;
      color: white;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
    .modal-content {
      border-radius: 10px;
    }
    .btn-ya {
      background-color: #789448;
      color: white;
    }
    .btn-ya:hover {
      background-color: #5e7d36;
      color: white;
    }
    .btn-tidak {
      background-color: #dc3545;
      color: white;
    }
    .btn-tidak:hover {
      background-color: #bb2d3b;
      color: white;
    }
  </style>
  <div class="form-container my-4 mx-auto">
    <h2 class="form-title">Kelola Akun Petani</h2>
    <form id="form-update">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" required>
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Nama Pengguna</label>
        <input type="text" class="form-control" id="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Kata Sandi</label>
        <input type="password" class="form-control" id="password" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" required>
      </div>

      <div class="d-flex justify-content-between mt-4">
        <button type="submit" class="btn btn-save">Simpan</button>
        <button type="button" class="btn btn-back" id="btn-kembali">Kembali</button>
      </div>
    </form>
  </div>

  <!-- Modal Konfirmasi Update -->
  <div class="modal fade" id="konfirmasiUpdateModal" tabindex="-1" aria-labelledby="konfirmasiUpdateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title w-100" id="konfirmasiUpdateModalLabel">Apakah anda yakin melakukan perubahan ini?</h5>
        </div>
        <div class="modal-body text-center">
          <button type="button" class="btn btn-ya me-3" id="btnKonfirmasiUpdate">Ya</button>
          <button type="button" class="btn btn-tidak" data-bs-dismiss="modal">Tidak</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Script Modal dan Navigasi -->
  <script>
    const formUpdate = document.getElementById('form-update');
    const btnKonfirmasiUpdate = document.getElementById('btnKonfirmasiUpdate');
    const btnKembali = document.getElementById('btn-kembali');
    const konfirmasiModal = new bootstrap.Modal(document.getElementById('konfirmasiUpdateModal'));

    formUpdate.addEventListener('submit', function(e) {
      e.preventDefault();
      konfirmasiModal.show();
    });

    btnKonfirmasiUpdate.addEventListener('click', function() {
      window.location.href = 'Dashboard Admin.html'; // Redirect setelah klik "YA"
    });

    btnKembali.addEventListener('click', function() {
      window.location.href = 'Dashboard Admin.html'; // Tombol Kembali juga redirect
    });
  </script>
@endsection
