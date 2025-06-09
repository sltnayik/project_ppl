@extends('admin.layouts.app')
@section('title', 'Update Petani')

@section('content')
  <div class="form-container my-4 mx-auto"
    style="max-width:600px;margin:0 auto;background:#f5f9ef;padding:30px;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,0.1);">
    <h2 class="form-title"
      style="margin-bottom:20px;color:#789448;text-align:center;font-weight:bold;">
      Kelola Akun Petani
    </h2>
    <form id="form-update">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" value="{{ $petani->nama_petani }}" required>
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Nama Pengguna</label>
        <input type="text" class="form-control" id="username" value="{{ $petani->nama_pengguna_petani }}" required>
      </div>
      <div class="mb-3">
        <label for="no_hp" class="form-label">No HP</label>
        <input type="text" class="form-control" id="no_hp" value="{{ $petani->no_hp }}" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Kata Sandi (isi jika ingin mengubah)</label>
        <input type="password" class="form-control" id="password">
      </div>
      <div class="d-flex justify-content-between mt-4">
        <button type="submit" class="btn btn-save"
          style="width:48%;background-color:#789448;color:white;border:none;"
          onmouseover="this.style.backgroundColor='#5e7d36'"
          onmouseout="this.style.backgroundColor='#789448'">
          Simpan
        </button>
        <button type="button" class="btn btn-back" id="btn-kembali"
          style="width:48%;background-color:#789448;color:white;border:none;"
          onmouseover="this.style.backgroundColor='#5e7d36'"
          onmouseout="this.style.backgroundColor='#789448'">
          Kembali
        </button>
      </div>
    </form>
  </div>

  <!-- Modal Konfirmasi Update -->
  <div class="modal fade" id="konfirmasiUpdateModal" tabindex="-1" aria-labelledby="konfirmasiUpdateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="border-radius:10px;">
        <div class="modal-header text-center"
          style="background-color:#789448;color:white;border-top-left-radius:10px;border-top-right-radius:10px;">
          <h5 class="modal-title w-100" id="konfirmasiUpdateModalLabel">Apakah anda yakin melakukan perubahan ini?</h5>
        </div>
        <div class="modal-body text-center">
          <button type="button" class="btn btn-ya me-3" id="btnKonfirmasiUpdate"
            style="background-color:#789448;color:white;"
            onmouseover="this.style.backgroundColor='#5e7d36'"
            onmouseout="this.style.backgroundColor='#789448'">
            Ya
          </button>
          <button type="button" class="btn btn-tidak" data-bs-dismiss="modal"
            style="background-color:#dc3545;color:white;"
            onmouseover="this.style.backgroundColor='#bb2d3b'"
            onmouseout="this.style.backgroundColor='#dc3545'">
            Tidak
          </button>
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

let updateData = {};

formUpdate.addEventListener('submit', function(e) {
  e.preventDefault();
  updateData = {
    nama_petani: document.getElementById('nama').value,
    nama_pengguna_petani: document.getElementById('username').value,
    no_hp: document.getElementById('no_hp').value,
    password: document.getElementById('password').value
  };
  konfirmasiModal.show();
});

btnKonfirmasiUpdate.addEventListener('click', function() {
  fetch("{{ route('admin.updatepetani', ['id' => $petani->id_petani]) }}", {
    method: "PUT",
    headers: {
      "Content-Type": "application/json",
      "X-CSRF-TOKEN": "{{ csrf_token() }}",
      "Accept": "application/json"
    },
    body: JSON.stringify(updateData)
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      window.location.href = "{{ route('admin.dashboard') }}";
    } else {
      alert("Gagal update data.");
    }
  })
  .catch(() => alert("Gagal update data."));
});

btnKembali.addEventListener('click', function() {
  window.location.href = "{{ route('admin.dashboard') }}";
});
</script>
@endsection
