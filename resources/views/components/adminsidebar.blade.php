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
    <style>
        .sidebar {
        width: 250px;
        height: 100vh;
        background-color: #f5f9ef;
        position: fixed;
        padding: 20px 0;
        border-right: 1px solid #ccc;
      }

      .sidebar .nav-link {
        background-color: rgba(114, 144, 67, 0.5);
        padding: 15px 20px;
        color: #333;
        font-weight: 500;
        display: flex;
        align-items: center;
        /* background-color: transparent; */
        border: none;
        width: 100%;
        text-align: left;
        border-radius: 2px;
      }

      .sidebar .nav-link.active {
        background-color: #729043;
        color: white;
      }
    </style>
</head>
<body style="font-family: 'Segoe UI', sans-serif; background-color: #f9f9f9; margin: 0; padding: 0;">

    <div class="sidebar">
      <div class="text-center mb-4" style="width: 150px; height: 50px; margin: auto">
        <img src="{{ asset('assets/Logo.png') }}" alt="Logo" style="height: 50px; width: 150px" />
      </div>
      <div style="padding: 10px">
        <button class="nav-link"
          onclick="window.location.href='{{ route('admin.dashboard') }}'">
          <i class="bi bi-person-fill me-2"></i> Data Petani
        </button>
      </div>
      <div style="padding: 10px">
        <button class="nav-link"
          onclick="window.location.href='{{ route('admin.riwayat') }}'">
          <i class="bi bi-graph-up me-2"></i> Analisis Tanaman
        </button>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
