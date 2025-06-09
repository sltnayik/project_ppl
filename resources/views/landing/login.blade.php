<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Petani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />
    <style>
      /* Modal */
      .modal-content {
        background-color: #729043;
        color: #fff;
        border-radius: 20px;
        padding: 5px;
        text-align: center;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        animation: fadeInUp 0.5s ease;
      }

      .modal-body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .icon-circle {
        font-size: 3rem;
        margin-bottom: 50px;
      }

      .text-success-custom {
        color: white;
      }

      .text-error-custom {
        color: rgba(255, 255, 255);
      }

      /* Animasi untuk tombol saat hover */
      .btn-hover {
        transition: all 0.3s ease-in-out;
      }

      .btn-hover:hover {
        background-color: #5a7a34; /* Warna tombol saat hover */
        transform: scale(1.1); /* Membesarkan tombol */
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan */
      }

      /* Animasi untuk elemen */
      @keyframes fadeIn {
        from {
          opacity: 0;
          transform: translateY(20px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      @keyframes slideInLeft {
        from {
          opacity: 0;
          transform: translateX(-100%);
        }
        to {
          opacity: 1;
          transform: translateX(0);
        }
      }

      @keyframes slideInRight {
        from {
          opacity: 0;
          transform: translateX(100%);
        }
        to {
          opacity: 1;
          transform: translateX(0);
        }
      }

      @keyframes fadeInUp {
        from {
          opacity: 0;
          transform: translateY(30px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      /* Responsivitas */
      @media (max-width: 768px) {
        .rounded-top {
          border-radius: 3rem 3rem 0 0 !important;
        }
      }

      @media (min-width: 768px) {
        .rounded-md-start-5 {
          border-radius: 0 0 0 3rem !important;
        }
      }
    </style>
  </head>
  <body style="background-color: #729043">
    <!-- Login Page -->
    <div class="container-fluid">
      <div class="row flex-column flex-md-row">
        <!-- Welcoming Session -->
        <div class="col-12 col-md-5" style="animation: slideInLeft 1s ease-in-out">
          <section class="container-fluid d-flex justify-content-center align-items-center text-center" style="height: 100vh">
            <div class="text-white">
              <h1 style="animation: fadeIn 1.5s ease-in-out">Selamat Datang di</h1>
              <img src="{{ asset('assets/Logo.png') }}" alt="ScanAja" style="animation: fadeIn 2s ease-in-out" />
              <p class="lead" style="animation: fadeIn 2.5s ease-in-out; font-size: 1.2rem">
                Sistem Cerdas Analisis dan Deteksi <br />
                Penyakit Tanaman Jagung
              </p>
            </div>
          </section>
        </div>
        <!-- Form Section -->
        <div class="col-12 col-md-7 p-0 m-0 rounded-top rounded-start-5" style="background-color: #ffffff; animation: slideInRight 1s ease-in-out">
          <section class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh">
            <form class="w-75" method="POST" action="{{ route('login.petani') }}" style="animation: fadeIn 1.5s ease-in-out; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); border-radius: 20px; padding: 20px">
              @csrf
              <h2 class="text-center" style="font-weight: bold; color: #729043; animation: fadeIn 2s ease-in-out">Masuk</h2>
              <div class="my-4">
                <label for="username" class="form-label" style="color: #729043">Nama Pengguna</label>
                <input
                  type="text"
                  class="form-control shadow-sm"
                  id="username"
                  name="username"
                  placeholder="Masukkan Nama Pengguna"
                  style="border-radius: 50px; background-color: #72724380; border: 1px solid white; color: rgb(255, 255, 255)"
                  required
                />
              </div>
              <div class="my-4">
                <label for="password" class="form-label" style="color: #729043">Kata Sandi</label>
                <input
                  type="password"
                  class="form-control shadow-sm"
                  id="password"
                  name="password"
                  placeholder="Masukkan Kata Sandi"
                  style="border-radius: 50px; background-color: rgba(114, 114, 67, 0.5); border: 1px solid white; color: rgb(255, 255, 255)"
                  required
                />
              </div>
              <div class="text-end">
                <p>
                  <a class="link-offset-2 link-underline link-underline-opacity-0" href="Lupa Sandi.html" style="color: rgb(114, 144, 67)"> Lupa Kata Sandi? </a>
                </p>
              </div>
              <div class="m-4 text-center">
                <button type="submit" class="btn btn-secondary mt-4 shadow-sm btn-hover" style="background-color: #729043; width: 100px; border-radius: 50px; border: 1px solid white">Masuk</button>
              </div>
            </form>
            @if($errors->has('login'))
                <div class="alert alert-danger">
                    {{ $errors->first('login') }}
                </div>
            @endif
          </section>
        </div>

        <!-- Modal Notifikasi Login -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-body">
                <!-- Icon Area -->
                <i id="icon-success" class="bi bi-check-circle-fill icon-circle text-success-custom d-none"></i>
                <i id="icon-error" class="bi bi-x-circle-fill icon-circle text-error-custom d-none"></i>
                <!-- Pesan -->
                <h5 id="modalMessage" class="fw-bold"></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    {{-- <script>
      document.querySelector("button.btn").addEventListener("click", function () {
        const email = document.getElementById("exampleInputEmail1").value.trim();
        const password = document.getElementById("exampleInputPassword1").value.trim();

        const modal = new bootstrap.Modal(document.getElementById("loginModal"));
        const modalMessage = document.getElementById("modalMessage");
        const iconSuccess = document.getElementById("icon-success");
        const iconError = document.getElementById("icon-error");

        // Reset ikon dan pesan
        iconSuccess.classList.add("d-none");
        iconError.classList.add("d-none");

        if (!email || !password) {
          modalMessage.textContent = "Data wajib diisi.";
          iconError.classList.remove("d-none");
          modal.show();
        } else if (email === "petani@example.com" && password === "123456") {
          modalMessage.textContent = "Login berhasil!";
          iconSuccess.classList.remove("d-none");
          modal.show();
          setTimeout(function() {
          window.location.href = @json(route('petani.dashboard'));
            }, 1500);
        } else if (email === "admin@example.com" && password === "123456") {
          modalMessage.textContent = "Login berhasil!";
          iconSuccess.classList.remove("d-none");
          modal.show();
          setTimeout(function() {
          window.location.href = @json(route('admin.dashboard'));
            }, 1500);
        } else {
          modalMessage.textContent = "Nama Pengguna atau Kata Sandi Salah.";
          iconError.classList.remove("d-none");
          modal.show();
        }
      });
    </script> --}}
  </body>
</html>
