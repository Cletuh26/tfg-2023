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
    <!-- Navbar -->
    <div class="d-flex justify-content-center m-auto bg-light p-2">
        <div class="d-flex justify-content-center align-items-center w-25">
            <a href="{{ route('inicio') }}"><img src="{{ Storage::url('images/club-algar-negro.png') }}" alt="Logo" class="navbar-item"></a>
        </div>
        <div class="d-flex justify-content-center align-items-center w-50">
            <a href="{{ route('inicio') }}" class="navbar-item text-decoration-none m-2">Inicio</a>
            <a href="{{ route('rutinas.index') }}" class="navbar-item text-decoration-none m-2">Rutinas</a>
            <a href="{{ route('dietas.index') }}" class="navbar-item text-decoration-none m-2">Dietas</a>
            <a href="{{ route('rutinas.create') }}" class="navbar-item text-decoration-none m-2">Crear entrenamiento</a>
        </div>
        <div class="d-flex justify-content-center align-items-center w-25">
            @auth
            <div class="navbar-item">
                <div class="d-flex justify-content-center flex-column align-items-center">
                    <img style="width:30px;" src="{{ Storage::url('images/user-default.png') }}" alt="Logo usuario">
                    <h6 style="text-align:right;">{{ ucfirst(Auth::user()->nick) }}</h6>
                </div>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <a href="#" onclick="this.closest('form').submit()" class="button text-decoration-none text-danger">Cerrar sesión <i class="fa-solid fa-right-to-bracket"></i></a>
                </form>
            </div>
            @else
            <div class="navbar-item">
                <div class="buttons">
                    <i class="fa-solid fa-user"></i>
                    <a href="{{ route('login') }}" class="button text-decoration-none text-dark me-3">Iniciar sesión</a>
                    <i class="fa-solid fa-key"></i>
                    <a href="{{ route('registro') }}" class="button text-decoration-none text-dark">Registrarse</a>
                </div>
            </div>
            @endauth
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