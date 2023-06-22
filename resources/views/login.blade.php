@include('partials.base')

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-2">

                                <a href="{{ route('inicio') }}"><img src="{{ asset('assets/img/club-algar-blanco.png') }}" alt="Logo" class="navbar-item pb-md-5"></a>

                                <h2 class="fw-bold mb-2 text-uppercase">Iniciar sesión</h2>
                                <p class="font-nutricion mb-5">Por favor introduce tu correo y contraseña</p>

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
                                <p class="mb-0">¿No tienes cuenta? <a href="{{ route('registro') }}" class="font-nutricion link-registro fw-bold">Registrate</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>