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
        <button class="btn me-3" style="border-radius: 50%; width: 40px; height: 40px; border: 2px solid white">
          <i class="bi bi-arrow-left" style="color: white"></i>
        </button>
        <div>
          <img src="{{ asset('assets/Logo.png') }}" alt="Logo" style="height: 50px; width: 150px" />
        </div>
      </div>
      <div class="d-flex align-items-center" style="gap: 15px">
        <span style="color: white; margin-right: 10px">Admin</span>
        <div class="rounded-circle pb-1" style="background-color: rgb(207, 205, 205); width: 35px; height: 35px; display: flex; align-items: center; justify-content: center">
          <i class="bi bi-person-circle" style="color: white; font-size: 35px"></i>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
