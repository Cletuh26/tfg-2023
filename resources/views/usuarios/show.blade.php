@include('partials.base')

<body>
    @include('partials.navbar-dark')

    @if (session('editado_correcto'))
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Información</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('editado_correcto') }} <i class="fa-solid fa-check" style="color: #2fa518;"></i>
                </div>
            </div>
        </div>
    @endif

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
                            <form action="{{ route('usuarios.edit', $usuario->id) }}" method="post">
                                @csrf @method('get')
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
                                            type="date"
                                            value="{{ old('fecha_nacimiento', $usuario->fecha_nacimiento) }}" disabled>
                                    </div>
                                </div>

                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (peso)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="peso">Peso <small>(kg)</small></label>
                                        <input class="form-control" id="peso" name="peso" type="number"
                                            min="10" max="400" value="{{ old('peso', $usuario->peso) }}"
                                            disabled>
                                    </div>
                                    <!-- Form Group (altura)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="altura">Altura <small>(cm)</small></label>
                                        <input class="form-control" id="altura" name="altura" type="number"
                                            value="{{ old('altura', $usuario->altura) }}" disabled>
                                    </div>
                                </div>
                                <!-- Save changes button-->
                                <button class="btn btn-outline-primary" type="submit">Editar</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 row flex-column">
                    <!-- Logout card-->
                    <div class="card mb-4 mb-xl-0 p-0">
                        <div class="card-header color-nutricion text-white">Opciones</div>
                        <div class="card-body text-center">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <!-- Save changes button-->
                                <button class="btn btn-outline-danger mt-3" type="submit">Cerrar sesión</button>
                            </form>
                        </div>
                    </div>

                    <!-- Password card-->
                    <div class="card mb-4 mb-xl-0 mt-3 p-0">
                        <div class="card-header color-nutricion text-white">Cambiar contraseña</div>
                        <div class="card-body text-center">
                            <form action="{{ route('usuarios.editPass', Auth::user()->id) }}" method="post">
                                @csrf
                                <!-- Save changes button-->
                                <button class="btn btn-outline-primary mt-3" type="submit">Modificar</button>
                            </form>
                        </div>
                    </div>

                    <!-- IMC card-->
                    <div class="card mb-4 mb-xl-0 mt-3 p-0">
                        <div class="card-header color-nutricion text-white">Índice de Masa Corporal (IMC)</div>
                        <div class="card-body text-center">
                            @if (!is_null($usuario->imc))
                            <p class="fs-1 mb-1 mt-3"><strong>{{ $usuario->imc }}</strong></p>
                                <small>
                                    @switch($usuario->imc)
                                    @case($usuario->imc < 18.5)
                                        <p class="mt-1 text-danger">Bajo peso</p>
                                        @break
                                
                                    @case($usuario->imc >= 18.5 && $usuario->imc <= 24.9)
                                        <p class="mt-1 text-success">Saludable</p>
                                        @break
                                
                                    @case($usuario->imc >= 25 && $usuario->imc <= 29.9)
                                        <p class="mt-1 text-warning">Sobrepeso</p>
                                        @break
                                
                                    @case($usuario->imc >= 30 && $usuario->imc <= 39.9)
                                        <p class="mt-1 text-orange">Obesidad</p>
                                        @break
                                
                                    @case($usuario->imc >= 40)
                                        <p class="mt-1 mb-2 text-danger">Obesidad severa</p>
                                        @break
                                
                                    @default
                                        <p>No se ha calculado el IMC</p>
                                @endswitch
                                </small>
                            @else
                                <p class="text-danger">No se pueden mostrar los datos. Verifica que hayas introducido peso y altura.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>
