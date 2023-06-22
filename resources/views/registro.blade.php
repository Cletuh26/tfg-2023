@include('partials.base')

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-3 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 pt-2 pb-2 text-center">

                            <div class="mb-md-4 mt-md-1 pb-1">

                                <a href="{{ route('inicio') }}"><img src="{{ asset('assets/img/club-algar-blanco.png') }}" alt="Logo" class="navbar-item pb-md-3"></a>

                                <h2 class="fw-bold mb-2 text-uppercase">Registro</h2>
                                <p class="font-nutricion mb-2">Rellena los campos para completar el registro</p>

                                <form action="{{ route('registroProcesado') }}" method="POST">
                                    @csrf

                                    <label class="form-label" for="dni">DNI</label>
                                    <input type="text" id="dni" name="dni" class="form-control form-control-lg" minlength="9" maxlength="9" placeholder="Introduce DNI..." value="{{ old('dni') }}" required title="Introduce 8 números y 1 letra (DNI)"/>
                                    @error('dni')
                                    <small style='color:#ff4040;'>{{ $message }}</small><br><br>
                                    @enderror

                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" id="email" name="email" placeholder="Introduce email..." class="form-control form-control-lg" value="{{ old('email') }}" required title="Introduce un email"/>
                                    @error('email')
                                    <small style='color:#ff4040;'>{{ $message }}</small><br><br>
                                    @enderror

                                    <label class="form-label" for="nick">Nombre usuario</label>
                                    <input type="text" id="nick" name="nick" placeholder="Introduce un nombre de usuario..." class="form-control form-control-lg" value="{{ old('nick') }}" required title="Introduce un nombre de usuario"/>
                                    @error('nick')
                                    <small style='color:#ff4040;'>{{ $message }}</small><br><br>
                                    @enderror

                                    <label class="form-label" for="password">Contraseña</label>
                                    <input type="password" id="password" name="password" placeholder="Introduce una contraseña..." class="form-control form-control-lg" required title="Introduce una contraseña"/>
                                    @error('password')
                                    <small style='color:#ff4040;'>{{ $message }}</small><br><br>
                                    @enderror

                                    <label class="form-label" for="confirm_password">Confirmar contraseña</label>
                                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Repita la contraseña..." class="form-control form-control-lg" required title="Repita la contraseña"/>
                                    @error('confirm_password')  
                                    <small style='color:#ff4040;'>{{ $message }}</small><br><br>
                                    @enderror

                                    <button class="btn btn-outline-light btn-lg px-3 mt-3" type="submit">Registrarse</button>
                                </form>
                            </div>

                            <div>
                                <p class="mb-0">¿Ya tienes cuenta? <a href="{{ route('login') }}" class="font-nutricion link-login fw-bold">Iniciar sesión</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>