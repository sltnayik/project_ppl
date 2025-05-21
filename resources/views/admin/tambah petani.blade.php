@extends('admin.layouts.app')
@section('title', 'Tambah Petani')

@section('content')
    <style>
    .content {
      margin-left: 250px;
      padding: 20px;
    }

    .form-control {
      background-color: #c0ce9b;
      border: none;
      color: #000;
    }

    .form-control::placeholder {
      color: #546c2e;
    }

    .btn-tambah {
      background-color: #789448 !important;
      color: white !important;
      border-radius: 20px !important;
      width: 150px !important;
      margin: auto !important;
    }

    .btn-tambah:hover {
      background-color: #5f7136 !important;
    }
    </style>
  <!-- Content -->
  <div class="content">
    <h4 class="mb-4">Tambah Data Petani</h4>
    <form id="tambahPetaniForm">
      <div class="mb-3">
        <label for="namaPetani" class="form-label">Nama</label>
        <input type="text" class="form-control" id="namaPetani" placeholder="Masukkan nama petani" required>
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Nama Pengguna</label>
        <input type="text" class="form-control" id="username" placeholder="Masukkan nama pengguna" required>
      </div>
      <div class="mb-3">
        <label for="noHp" class="form-label">No Hp</label>
        <input type="text" class="form-control" id="noHp" placeholder="Masukkan nomor HP" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Masukkan password" required>
      </div>
      <button type="submit" class="btn btn-tambah">Tambah</button>
    </form>
  </div>

  <!-- Modal Pop-up untuk Konfirmasi -->
  <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Data Petani Telah Dibuat</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Data petani baru telah berhasil ditambahkan ke sistem.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Script untuk Menangani Formulir dan Modal -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Event listener untuk menangani pengisian formulir
    document.getElementById("tambahPetaniForm").addEventListener("submit", function(e) {
      e.preventDefault(); // Mencegah halaman untuk reload
      // Menampilkan modal konfirmasi
      var modal = new bootstrap.Modal(document.getElementById('successModal'));
      modal.show();
    });
  </script>
@endsection
