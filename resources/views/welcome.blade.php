<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nutrición Algar</title>

    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="d-flex justify-content-center align-items-center bg-secondary">
        <div class="d-flex w-50">
            <img src="{{ asset('images/club-algar.png') }}" alt="Logo" class="navbar-item">
        </div>

        <div class="d-flex w-50">
            <a href="{{ route('rutinas.index') }}" class="navbar-item text-white text-decoration-none">Rutinas</a>
            <a href="{{ route('dietas.index') }}" class="navbar-item text-white text-decoration-none">Dietas</a>
            <a href="{{ route('ejercicios.index') }}" class="navbar-item text-white text-decoration-none">Ejercicios</a>
        </div>
    </div>



    <!-- Bootstrap scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>