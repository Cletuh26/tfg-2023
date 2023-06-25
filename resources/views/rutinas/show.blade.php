@include('partials.base')

<body>
    @include('partials.navbar-dark')

    @if (session('rutinaModificada'))
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Información</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('rutinaModificada') }} <i class="fa-solid fa-check" style="color: #2fa518;"></i>
                </div>
            </div>
        </div>
    @endif

    @if (session('rutinaBorrada'))
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Información</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('rutinaBorrada') }} <i class="fa-solid fa-check" style="color: #2fa518;"></i>
                </div>
            </div>
        </div>
    @endif

    @if (session('rutinaCreada'))
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Información</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('rutinaCreada') }} <i class="fa-solid fa-check" style="color: #2fa518;"></i>
                </div>
            </div>
        </div>
    @endif

    <main>
        <div class="col-12 text-center">
            <div>
                <h2 class="text-dark mt-15 mb-4">Información de la rutina <button class="btn btn-primary btn-sm"><a
                            href="{{ route('rutinas.edit', $rutina->id) }}" class="text-white">Editar</a></button>
                </h2>
            </div>
        </div>
        <hr class="mt-0 mb-4">
        <div class="container-xl px-4 mt-4 mb-5">
            <div class="row">
                <div class="col-xl-12 m-auto">
                    <!-- Rutina card-->
                    <form action="{{ route('rutinas.edit', $rutina->id) }}" method="post">
                        @csrf

                        <!-- Form Group (nombre)-->
                        <div class="col-md-12">
                            <label class="small mb-1" for="nombre">Nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text"
                                placeholder="Introduce el nombre" value="{{ ucfirst($rutina->nombre) }}" disabled>
                        </div>

                        <!-- Form Group (descripcion)-->
                        <div class="col-md-12">
                            <label class="small mb-1" for="descripcion">Descripción</label>
                            <p class="m-0 col-md-12">
                                <textarea class="form-control" name="descripcion" id="descripcion" cols="68" rows="3" disabled>{{ ucfirst($rutina->descripcion) }}</textarea>
                            </p>
                        </div>

                        <!-- Form Group (tipo)-->
                        <div class="col-md-12">
                            <label class="small mb-1" for="tipo">Tipo</label>
                            <input class="form-control" id="tipo" name="tipo" type="text"
                                placeholder="Introduce el tipo" value="{{ ucfirst($rutina->tipo) }}" disabled>
                        </div>

                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (numero ejercicios)-->
                            <div class="col-md-12">
                                <label class="small mb-1" for="numeroEjercicios">Número de ejercicios</label>
                                <input class="form-control" id="numeroEjercicios" name="numeroEjercicios" type="text"
                                    value="{{ $rutina->ejercicios->count() }}" disabled>
                            </div>
                        </div>
                    </form>
                    <!-- Ejercicios details -->
                    <div>
                        <h2 class="text-dark mt-5 mb-1 text-center">Ejercicios
                    </div>

                    <hr class="mt-0 mb-3">

                    <table class="table mt-3">
                        <thead>
                            <tr class="text-center align-middle small">
                                <th>Imagen</th>
                                <th>Tipo</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Series</th>
                                <th>Repeticiones</th>
                                <th>Descanso</th>
                                <th>Duración</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rutina->ejercicios as $ejercicio)
                                <tr class="text-center align-middle small">
                                    <td><img src="{{ '' }}" alt="Imagen ejercicio"></td>
                                    <td>{{ ucfirst($ejercicio->tipo) }}</td>
                                    <td>{{ ucfirst($ejercicio->nombre) }}</td>
                                    <td>{{ ucfirst($ejercicio->descripcion) }}</td>
                                    <td>{{ $ejercicio->series }}</td>
                                    <td>{{ $ejercicio->repeticiones }}</td>
                                    <td>{{ $ejercicio->descanso }} min</td>
                                    <td>{{ $ejercicio->duracion }} min</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>
