<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/02a25bbc21.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    <title>Nutrición Algar</title>
</head>

<body class="bg-dark text-dark">
    <div class="d-flex justify-content-center m-auto bg-light p-4">
        <!-- Navbar -->
        <div class="d-flex justify-content-center align-items-center w-25">
            <a href="{{ url('/') }}"><img src="{{ asset('images/club-algar-negro.png') }}" alt="Logo" class="navbar-item"></a>
        </div>
        <div class="d-flex justify-content-center align-items-center w-50">
            <a href="{{ route('rutinas.index') }}" class="navbar-item text-decoration-none m-2">Rutinas</a>
            <a href="{{ route('dietas.index') }}" class="navbar-item text-decoration-none m-2">Dietas</a>
            <a href="{{ route('ejercicios.index') }}" class="navbar-item text-decoration-none m-2">Crear entrenamiento</a>
            <a href="{{ route('ejercicios.index') }}" class="navbar-item text-decoration-none m-2">Suscribirse</a>
        </div>
        <div class="d-flex justify-content-center align-items-center w-25">
            @guest
            <div class="navbar-item">
                <div class="buttons">
                    <i class="fa-solid fa-user"></i>
                    <a href="{{ url('login') }}" class="button text-decoration-none text-dark me-3">Iniciar sesión</a>
                    <i class="fa-solid fa-key"></i>
                    <a href="{{ route('registro') }}" class="button text-decoration-none text-dark">Registrarse</a>
                </div>
            </div>
            @else
            <div class="navbar-item">
                <i class="fa-solid fa-pencil"></i>
                <a href="" class="button">Administrar</a>
            </div>
            @endguest
        </div>

    </div>
    <!-- End Navbar -->

    <div class="w-75 m-auto bg-light">
        @yield('banner')
    </div>

    <div class="d-flex justify-content-center w-75 m-auto bg-light">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">Nutrición Algar ® Todos los derechos reservados. Creado con 💜 por Ismael</span>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Bootstrap scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>