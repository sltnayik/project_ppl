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
<body class="d-flex flex-column min-vh-100" style="font-family: 'Segoe UI', sans-serif; background-color: #f9f9f9; margin: 0; padding: 0; background-image: url('{{ asset('assets/bg_analisis.png') }}'); background-repeat: no-repeat; background-size: 500px; background-position-y: 150px;">


    @include('components.petaniheader')

    <div class="flex-grow-1 d-flex justify-content-center align-items-center">
        @yield('content')
    </div>

    @include('components.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
