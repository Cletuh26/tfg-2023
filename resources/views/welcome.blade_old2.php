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

    <title>Nutrición Algar</title>
</head>

<body class="bg-dark text-dark">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container justify-content-center">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('images/club-algar.png') }}" alt="Logo de la empresa">
                    </a>
                </div>
                <div class="col-lg-4 text-center">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rutinas.index') }}">Rutinas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dietas.index') }}">Dietas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ejercicios.index') }}">Ejercicios</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 text-right">
                    <ul class="navbar-nav">
                        <i class="fas fa-sign-in-alt"></i>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('login') }}">Iniciar sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('registro') }}">Registrarse</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <!-- Bootstrap scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>