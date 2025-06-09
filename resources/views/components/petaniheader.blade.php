<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    {{-- Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
</head>
<body style="font-family: 'Segoe UI', sans-serif; background-color: #f9f9f9; margin: 0; padding: 0;">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center px-4 py-2" style="background-color: #729043; animation: slideInLeft 1s ease-in-out">
      <img src="{{ asset('assets/Logo.png') }}" alt="Logo" style="height: 50px; width: 150px" />
      <div class="d-flex align-items-center">
        <nav class="me-3">
          <a href="{{ route('petani.dashboard') }}" class="btn btn-link text-white text-decoration-none {{ request()->routeIs('petani.dashboard') ? 'fw-bold text-decoration-underline' : '' }}">
            <i class="bi bi-house-door"></i> Home
          </a>
          <a href="{{ route('petani.scan') }}" class="btn btn-link text-white text-decoration-none {{ request()->routeIs('petani.scan') ? 'fw-bold text-decoration-underline' : '' }}">
            <i class="bi bi-qr-code-scan"></i> Scan
          </a>
          <a href="{{ route('petani.riwayat') }}" class="btn btn-link text-white text-decoration-none {{ request()->routeIs('petani.riwayat') ? 'fw-bold text-decoration-underline' : '' }}">
            <i class="bi bi-clock-history"></i> Riwayat
          </a>
          <a href="{{ route('petani.panduan') }}" class="btn btn-link text-white text-decoration-none {{ request()->routeIs('petani.panduan') ? 'fw-bold text-decoration-underline' : '' }}">
            <i class="bi bi-bar-chart-line"></i> Panduan
          </a>
        </nav>
        <div class="dropdown">
          <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i> Profil
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="{{ route('petani.profil') }}"><i class="bi bi-person-lines-fill me-2"></i> Lihat Profil</a>
            </li>
            <li><hr class="dropdown-divider" /></li>
            <li>
              <!-- Ganti dengan route logout jika sudah ada -->
              <form action="{{ route('login.petani') }}" method="GET">
                <button type="submit" class="dropdown-item text-danger">
                  <i class="bi bi-box-arrow-right me-2"></i> Logout
                </button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
