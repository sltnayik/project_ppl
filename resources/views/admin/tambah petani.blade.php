{{-- filepath: resources/views/admin/tambah petani.blade.php --}}
@extends('admin.layouts.app')
@section('title', 'Tambah Petani')

@section('content')
  <div class="content" style="margin-left:250px; padding:20px;">
    <h4 class="mb-4">Tambah Data Petani</h4>
    <form id="tambahPetaniForm" autocomplete="off">
      <div class="mb-3">
        <label for="namaPetani" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama_petani" placeholder="Masukkan nama petani" required
          style="background-color:#c0ce9b; border:none; color:#000;">
      </div>
      <div class="mb-3">
        <label for="nama_pengguna_petani" class="form-label">Nama Pengguna</label>
        <input type="text" class="form-control" id="nama_pengguna_petani" placeholder="Masukkan nama pengguna" required
          style="background-color:#c0ce9b; border:none; color:#000;">
      </div>
      <div class="mb-3">
        <label for="no_hp" class="form-label">No Hp</label>
        <input type="text" class="form-control" id="no_hp" placeholder="Masukkan nomor HP" required
          style="background-color:#c0ce9b; border:none; color:#000;">
      </div>
      <div class="mb-3 position-relative">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Masukkan password" required
          style="background-color:#c0ce9b; border:none; color:#000;">
        <button type="button" id="togglePassword"
          style="position:absolute; top:70%; right:10px; transform:translateY(-50%); background:none; border:none; cursor:pointer;">
          👁
        </button>
      </div>
      <button type="submit" class="btn btn-tambah"
        style="background-color:#789448; color:white; border-radius:20px; width:150px; margin:auto; display:block;"
        onmouseover="this.style.backgroundColor='#5f7136'"
        onmouseout="this.style.backgroundColor='#789448'">
        Tambah
      </button>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Toggle show/hide password
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    togglePassword.addEventListener('click', () => {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      togglePassword.textContent = type === 'password' ? '👁' : '🙈';
    });

    // Handle form submit
    document.getElementById("tambahPetaniForm").addEventListener("submit", function(e) {
      e.preventDefault();

      const nama_petani = document.getElementById("nama_petani").value.trim();
      const nama_pengguna_petani = document.getElementById("nama_pengguna_petani").value.trim();
      const no_hp = document.getElementById("no_hp").value.trim();
      const password = document.getElementById("password").value;

      fetch("{{ route('admin.storepetani') }}", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          "X-CSRF-TOKEN": "{{ csrf_token() }}",
          "Accept": "application/json"
        },
        body: JSON.stringify({
          nama_petani: nama_petani,
          nama_pengguna_petani: nama_pengguna_petani,
          no_hp: no_hp,
          password: password
        })
      })
      .then(response => {
        if (!response.ok) return response.json().then(err => Promise.reject(err));
        return response.json();
      })
      .then(data => {
        document.getElementById("tambahPetaniForm").reset();
        let modal = new bootstrap.Modal(document.getElementById('successModal'));
        modal.show();
      })
      .catch(error => {
        alert("Gagal tambah data: " + (error.message || JSON.stringify(error.errors)));
      });
    });
  </script>
@endsection
