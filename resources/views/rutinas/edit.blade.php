@include('partials.base')

<body>
    @include('partials.navbar-dark')

    @if (session('ejercicioBorrado'))
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Información</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('ejercicioBorrado') }} <i class="fa-solid fa-check" style="color: #2fa518;"></i>
                </div>
            </div>
        </div>
    @endif

    <main>
        <div class="col-12 text-center">
            <div>
                <h2 class="text-dark mt-15 mb-4">Información de la rutina <button class="btn btn-danger btn-sm"><a
                            href="{{ route('rutinas.show', $rutina->id) }}" class="text-white">Cancelar</a></button>
                </h2>
            </div>
        </div>
        <hr class="mt-0 mb-4">
        <div class="container-xl px-4 mt-4 mb-5">
            <div class="row">
                <div class="col-xl-12 m-auto">
                    <!-- Rutina card-->
                    <form action="{{ route('rutinas.update', $rutina->id) }}" method="post">
                        @csrf

                        <!-- Form Group (tipo)-->
                        <div class="col-md-12">
                            <label class="small mb-1" for="tipo">Tipo</label>
                            <input class="form-control" id="tipo" name="tipo" type="text"
                                placeholder="Introduce el tipo" value="{{ old('tipo', $rutina->tipo) }}">
                        </div>

                        <!-- Form Group (descripcion)-->
                        <div class="col-md-12">
                            <label class="small mb-1" for="descripcion">Descripción</label>
                            <p class="m-0 col-md-12">
                                <textarea class="form-control" name="descripcion" id="descripcion" cols="68" rows="3">{{ $rutina->descripcion }}</textarea>
                            </p>
                        </div>

                        <!-- Form Row-->
                        <div class="cold-md-12 mb-3">
                            <!-- Form Group (numero ejercicios)-->
                            <div class="col-md-12">
                                <label class="small mb-1" for="numeroEjercicios">Número de ejercicios</label>
                                <input class="form-control" id="numeroEjercicios" name="numeroEjercicios" type="text"
                                    value="{{ old('numeroEjercicios', $numeroEjercicios) }}" disabled>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-xl-12 m-auto">
                    <!-- Ejercicios details -->
                    <div class="col-md-12">
                        <h2 class="text-dark mt-5 mb-1 text-center">Ejercicios</h2>
                    </div>
                    <hr class="mt-0 mb-3">
                </div>

                <div class="col-xl-12 m-auto">


                    <!-- Table content -->
                    <table class="table mt-3 col-md-12">
                        <thead>
                            <tr class="text-center align-middle small">
                                <th>Imagen</th>
                                <th>Tipo</th>
                                <th>Descripción</th>
                                <th>Series</th>
                                <th>Repeticiones</th>
                                <th>Duración</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ejerciciosRutina as $ejercicio)
                                <tr class="text-center align-middle small">
                                    <td><img src="{{ '' }}" alt="Imagen ejercicio"></td>
                                    <td>{{ ucfirst($ejercicio->tipo) }}</td>
                                    <td>{{ $ejercicio->descripcion }}</td>
                                    <td>{{ $ejercicio->series }}</td>
                                    <td>{{ $ejercicio->repeticiones }}</td>
                                    <td>{{ $ejercicio->duracion }} min</td>
                                    <td>
                                        <form action="{{ route('rutinas.borrarEjercicio', $rutina->id) }}"
                                            method="POST">
                                            @csrf @method('delete')
                                            <input type="hidden" name="ejercicio_id" value="{{ $ejercicio->id }}">
                                            <button class="btn btn-danger btn-sm" type="submit"><i
                                                    class="fa-solid fa-trash text-white"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </main>

    @include('partials.footer')
</body>
