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
      <div class="d-flex align-items-center">
        <button class="btn me-3" style="border-radius: 50%; width: 40px; height: 40px; border: 2px solid white"
  onclick="window.history.back()">
  <i class="bi bi-arrow-left" style="color: white"></i>
</button>
        <div>
          <img src="{{ asset('assets/Logo.png') }}" alt="Logo" style="height: 50px; width: 150px" />
        </div>
      </div>
      <div class="dropdown">
        <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i> Profil</button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <a class="dropdown-item" href="{{ route('petani.profil') }}"><i class="bi bi-person-lines-fill me-2"></i> Lihat Profil</a>
          </li>
          <li><hr class="dropdown-divider" /></li>
          <li>
            <a class="dropdown-item text-danger"href="{{ route('dashboard') }}"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
          </li>
        </ul>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
