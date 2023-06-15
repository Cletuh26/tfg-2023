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
        <div class="container py-3 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 pt-2 pb-2 text-center">

                            <div class="mb-md-4 mt-md-1 pb-1">

                                <a href="/"><img src="{{ asset('images/club-algar-blanco.png') }}" alt="Logo" class="navbar-item pb-md-3"></a>

                                <h2 class="fw-bold mb-2 text-uppercase">Registro</h2>
                                <p class="text-primary mb-2">Rellena los campos para completar el registro</p>

                                <form action="{{ route('registroProcesado') }}" method="POST">
                                    @csrf

                                    <label class="form-label" for="dni">DNI</label>
                                    <input type="text" id="dni" name="dni" class="form-control form-control-lg" maxlength="9" value="{{ old('dni') }}" />
                                    @error('dni')
                                    <small style='color:#ff4040;'>{{ $message }}</small><br><br>
                                    @enderror

                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control form-control-lg" value="{{ old('email') }}" />
                                    @error('email')
                                    <small style='color:#ff4040;'>{{ $message }}</small><br><br>
                                    @enderror

                                    <label class="form-label" for="nick">Nombre usuario</label>
                                    <input type="text" id="nick" name="nick" class="form-control form-control-lg" value="{{ old('nick') }}" />
                                    @error('nick')
                                    <small style='color:#ff4040;'>{{ $message }}</small><br><br>
                                    @enderror

                                    <label class="form-label" for="password">Contraseña</label>
                                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                    @error('password')
                                    <small style='color:#ff4040;'>{{ $message }}</small><br><br>
                                    @enderror

                                    <label class="form-label" for="confirm_password">Confirmar contraseña</label>
                                    <input type="password" id="confirm_password" name="confirm_password" class="form-control form-control-lg" />
                                    @error('confirm_password')  
                                    <small style='color:#ff4040;'>{{ $message }}</small><br><br>
                                    @enderror

                                    <button class="btn btn-outline-light btn-lg px-3 mt-3" type="submit">Registrarse</button>
                                </form>
                            </div>

                            <div>
                                <p class="mb-0">¿Ya tienes cuenta? <a href="{{ route('login') }}" class="text-primary fw-bold">Iniciar sesión</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>