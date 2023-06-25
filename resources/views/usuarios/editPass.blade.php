@include('partials.base')

<body>
    @include('partials.navbar-dark')

    <main>
        <div class="col-12 text-center">
            <div>
                <h2 class="text-dark mt-15 mb-4">MI CUENTA</h2>
            </div>
        </div>

        <hr class="mt-0 mb-4">
        <div class="container-xl px-4 mt-4 mb-5">
            <div class="row">
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header color-nutricion text-white">Detalles de la cuenta</div>
                        <div class="card-body">
                            <form action="{{ route('usuarios.edit', Auth::user()->id) }}" method="post">
                                @csrf
                                <!-- Form Row-->
                                <div class="row gx-3mb-3">
                                    <!-- Form Group (nick)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="nick">Nombre de usuario</label>
                                        <input class="form-control" id="nick" name="nick" type="text"
                                            value="{{ old('nick', $usuario->nick) }}" disabled>
                                    </div>
                                    <!-- Form Group (dni)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="dni">DNI</label>
                                        <input class="form-control" id="dni" name="dni" type="text"
                                            value="{{ old('dni', strtoupper($usuario->dni)) }}" disabled>
                                    </div>
                                </div>

                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (nombre)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="nombre">Nombre</label>
                                        <input class="form-control" id="nombre" name="nombre" type="text"
                                            value="{{ old('nombre', $usuario->nombre) }}" disabled>
                                    </div>
                                    <!-- Form Group (apellidos)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="apellidos">Apellidos</label>
                                        <input class="form-control" id="apellidos" name="apellidos" type="text"
                                            value="{{ old('apellidos', $usuario->apellidos) }}" disabled>
                                    </div>
                                </div>

                                <!-- Form Group (email)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="email">Correo electrónico</label>
                                    <input class="form-control" id="email" name="email" type="email"
                                        value="{{ old('email', $usuario->email) }}" disabled>
                                </div>

                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (telefono)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="telefono">Teléfono</label>
                                        <input class="form-control" id="telefono" name="telefono" type="tel"
                                            value="{{ old('telefono', $usuario->telefono) }}" disabled>
                                    </div>
                                    <!-- Form Group (fecha nacimiento)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="fecha_nacimiento">Fecha nacimiento</label>
                                        <input class="form-control" id="fecha_nacimiento" name="fecha_nacimiento"
                                            value="{{ old('fecha_nacimiento', $usuario->fecha_nacimiento) }}" disabled>
                                    </div>
                                </div>

                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (peso)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="peso">Peso <small>(kg)</small></label>
                                        <input class="form-control" id="peso" name="peso" type="number"
                                            value="{{ old('peso', $usuario->peso) }}" disabled>
                                    </div>
                                    <!-- Form Group (altura)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="altura">Altura <small>(cm)</small></label>
                                        <input class="form-control" id="altura" name="altura" type="number"
                                            value="{{ old('altura', $usuario->altura) }}" disabled>
                                    </div>
                                </div>
                                <!-- Save changes button-->
                                {{-- <button class="btn btn-primary" type="submit">Editar</button> --}}
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <!-- Credentials card-->
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header color-nutricion text-white">Cambiar contraseña</div>
                        <div class="card-body text-center">
                            <form action="{{ route('usuarios.updatePass', Auth::user()->id) }}" method="post">
                                @csrf @method('put')
                                <!-- Form Group (contraseña)-->
                                <div class="col-md-12">
                                    <label class="small mb-1" for="password">Contraseña actual</label>
                                    <input class="form-control" id="password" name="password" type="password"
                                        placeholder="Introduce la contraseña actual">
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <!-- Form Group (contraseña)-->
                                <div class="col-md-12 mt-2">
                                    <label class="small mb-1" for="password_new">Contraseña nueva</label>
                                    <input class="form-control" id="password_new" name="password_new"
                                        type="password" placeholder="Introduce la nueva contraseña">
                                    @error('password_new')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <!-- Form Group (repetir contraseña nueva)-->
                                <div class="col-md-12 mt-2">
                                    <label class="small mb-1" for="password_new_confirmation">Confirmar nueva
                                        contraseña</label>
                                    <input class="form-control" id="password_new_confirmation"
                                        name="password_new_confirmation" type="password"
                                        placeholder="Introduce la nueva contraseña de nuevo">
                                    @error('password_new_confirmation')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <!-- Save changes button-->
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <a class="btn btn-outline-danger mt-3"
                                            href="{{ route('usuarios.show', Auth::user()->id) }}">Cancelar</a>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-outline-success mt-3" type="submit">Restablecer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>
