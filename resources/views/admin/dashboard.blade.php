@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Content -->
    <div class="content" style="margin-left:250px; padding:20px;">
      <h4 class="mb-3">Data Petani</h4>

      <!-- Tombol Tambah Data -->
      <a href="{{ route('admin.tambah') }}" class="btn btn-tambah"
         style="background-color:#28a745; color:white; margin-bottom:15px;">
        <i class="bi bi-plus-circle"></i> Tambah Data
      </a>

      <!-- Tabel -->
      <table class="table table-bordered" style="background-color:white; border-radius:10px; overflow:hidden;">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Nama Pengguna</th>
            <th>No HP</th>
            <th>Password</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach($petanis as $petani)
                <tr>
                    <td>{{ $petani->id_petani }}</td>
                    <td>{{ $petani->nama_petani }}</td>
                    <td>{{ $petani->nama_pengguna_petani }}</td>
                    <td>{{ $petani->no_hp }}</td>
                    <td>******</td>
                    <td>
                        <a href="{{ route('admin.edit', ['id' => $petani->id_petani]) }}" class="btn btn-primary btn-sm btn-action" style="margin-right:5px;">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <button class="btn btn-danger btn-sm btn-hapus" data-id="{{ $petani->id_petani }}">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>

      <!-- Modal Konfirmasi Hapus -->
      <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content" style="border-radius: 15px;">
            <div class="modal-header" style="background-color: #789448; color: white; border-top-left-radius: 15px; border-top-right-radius: 15px;">
              <h5 class="modal-title" id="hapusModalLabel">Konfirmasi Hapus</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1);"></button>
            </div>
            <div class="modal-body text-center">
              <p>Apakah anda yakin akan menghapus akun ini?</p>
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-success" id="btn-ya">Ya</button>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Toast Sukses -->
      <div id="toast-sukses"
           style="position:fixed; top:20px; right:20px; background-color:#4caf50; color:white; padding:15px 20px; border-radius:10px; box-shadow:0 2px 10px rgba(0,0,0,0.2); display:none; z-index:9999;">
        Data berhasil dihapus!
      </div>

      <!-- Script -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
      <script>
var hapusModal = new bootstrap.Modal(document.getElementById("hapusModal"));
var idYangMauDihapus = null;
var barisYangMauDihapus = null;

document.querySelectorAll(".btn-hapus").forEach(function (button) {
  button.addEventListener("click", function () {
    idYangMauDihapus = this.getAttribute("data-id");
    barisYangMauDihapus = this.closest("tr");
    hapusModal.show();
  });
});

document.getElementById("btn-ya").addEventListener("click", function () {
  if (idYangMauDihapus) {
    fetch(`/petani/${idYangMauDihapus}`, {
      method: "DELETE",
      headers: {
        "X-CSRF-TOKEN": "{{ csrf_token() }}",
        "Accept": "application/json"
      }
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        if (barisYangMauDihapus) {
          barisYangMauDihapus.remove();
        }
        hapusModal.hide();
        tampilkanToast();
      } else {
        alert("Gagal menghapus data.");
      }
    })
    .catch(() => alert("Gagal menghapus data."));
  }
});

function tampilkanToast() {
  var toast = document.getElementById("toast-sukses");
  toast.style.display = "block";
  setTimeout(function () {
    toast.style.display = "none";
  }, 3000);
}
</script>
    </div>
@endsection
