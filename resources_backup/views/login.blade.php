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

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-2">

                                <a href="{{ route('inicio') }}"><img src="{{ Storage::url('images/club-algar-blanco.png') }}" alt="Logo" class="navbar-item pb-md-5"></a>

                                <h2 class="fw-bold mb-2 text-uppercase">Iniciar sesión</h2>
                                <p class="text-primary mb-5">Por favor introduce tu correo y contraseña</p>

                                <form action="{{ route('loginProcesado') }}" method="POST">
                                    @csrf
                                    @error('credenciales')
                                    <small style='color:#ff4040;'>{{ $message }}</small><br>
                                    @enderror

                                    <label class="form-label" for="email">Email</label>
                                    <input type="text" id="email" name="email" class="form-control form-control-lg" value="{{ old('email') }}" /><br>
                                    @error('email')
                                    <small style='color:#ff4040;'>{{ $message }}</small><br>
                                    @enderror

                                    <label class="form-label" for="password">Contraseña</label>
                                    <input type="password" id="password" name="password" class="form-control form-control-lg" /><br>
                                    @error('password')
                                    <small style='color:#ff4040;'>{{ $message }}</small><br>
                                    @enderror

                                    <p class="small mb-5 pb-lg-2 mt-3"><a class="text-white-50" href="#!">¿Has olvidado la contraseña?</a></p>

                                    <button class="btn btn-outline-light btn-lg px-3" type="submit">Iniciar sesión</button>
                                </form>
                            </div>

                            <div>
                                <p class="mb-0">¿No tienes cuenta? <a href="{{ route('registro') }}" class="text-primary fw-bold">Registrate</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>