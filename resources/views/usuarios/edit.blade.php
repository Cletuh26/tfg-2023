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
                            <form action="{{ route('usuarios.update', $usuario->id) }}" method="post">
                                @csrf @method('put')
                                <!-- Form Row-->
                                <div class="row gx-3mb-3">
                                    <!-- Form Group (nick)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="nick">Nombre de usuario</label>
                                        <input class="form-control" id="nick" name="nick" type="text"
                                            placeholder="Introduce el nombre de usuario"
                                            value="{{ old('nick', $usuario->nick) }}" disabled>
                                    </div>
                                    <!-- Form Group (dni)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="dni">DNI</label>
                                        <input class="form-control" id="dni" name="dni" type="text"
                                            placeholder="Mostrando tu identificación"
                                            value="{{ old('dni', strtoupper($usuario->dni)) }}" disabled>
                                    </div>
                                </div>

                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (nombre)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="nombre">Nombre</label>
                                        <input class="form-control" id="nombre" name="nombre" type="text"
                                            placeholder="Introduce tu nombre"
                                            value="{{ old('nombre', $usuario->nombre) }}">
                                    </div>
                                    <!-- Form Group (apellidos)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="apellidos">Apellidos</label>
                                        <input class="form-control" id="apellidos" name="apellidos" type="text"
                                            placeholder="Introduce tus apellidos"
                                            value="{{ old('apellidos', $usuario->apellidos) }}">
                                    </div>
                                </div>

                                <!-- Form Group (email)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="email">Correo electrónico</label>
                                    <input class="form-control" id="email" name="email" type="email"
                                        placeholder="Introduce tu email" value="{{ old('email', $usuario->email) }}">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (telefono)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="telefono">Teléfono</label>
                                        <input class="form-control" id="telefono" name="telefono" type="tel"
                                            placeholder="Introduce tu teléfono"
                                            value="{{ old('telefono', $usuario->telefono) }}">
                                    </div>
                                    <!-- Form Group (fecha nacimiento)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="fecha_nacimiento">Fecha nacimiento</label>
                                        <input class="form-control" id="fecha_nacimiento" name="fecha_nacimiento"
                                            type="date" placeholder="Introduce tu fecha de nacimiento"
                                            value="{{ old('fecha_nacimiento', $usuario->fecha_nacimiento) }}">
                                    </div>
                                </div>

                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (peso)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="peso">Peso <small>(kg)</small></label>
                                        <input class="form-control" id="peso" name="peso" type="number"
                                            min="10" max="400" placeholder="Introduce tu peso"
                                            value="{{ old('peso', $usuario->peso) }}">
                                        @error('peso')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <!-- Form Group (altura)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="altura">Altura <small>(cm)</small></label>
                                        <input class="form-control" id="altura" name="altura" type="number"
                                            placeholder="Introduce tu altura"
                                            value="{{ old('altura', $usuario->altura) }}">
                                        @error('altura')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Save changes button-->
                                <button class="btn btn-outline-primary" type="submit">Guardar cambios</button>

                                <button class="btn"><a class="btn btn-outline-danger"
                                    href="{{ route('usuarios.show', $usuario->id) }}">Cancelar</a></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <!-- Credentials card-->
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header color-nutricion text-white">Cambiar contraseña</div>
                        <div class="card-body text-center">
                            <form action="{{ route('usuarios.editPass', Auth::user()->id) }}" method="post">
                                @csrf
                                <!-- Save changes button-->
                                <button class="btn btn-outline-primary mt-3" type="submit">Modificar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>
