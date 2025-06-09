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
<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
      <div class="container-fluid" style="background-color: #ffffff">
        <picture>
          <img class="img-fluid" src="{{ asset('assets/Logo.png') }}" alt="ScanAJa" style="height: 50px; width: 150px" />
        </picture>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#" style="color: #adc685">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: #adc685">Analisis Tanaman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: #adc685">Panduan Perawatan</a>
            </li>
          </ul>
          <div>
            <button type="button" class="btn" style="background-color: #ffffff; color: #adc685; border: 1px solid #adc685">Daftar</button>
            <button type="button" class="btn" style="background-color: #adc685; color: #ffffff" onclick="window.location.href='{{ route('login.petani') }}'">Masuk</button>
          </div>
        </div>
      </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
