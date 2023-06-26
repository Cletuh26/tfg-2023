@include('partials.base')

<body>
    @include('partials.navbar-dark')

    <main>
        <div class="col-12 text-center">
            <div>
                <h2 class="text-dark mt-15 mb-4">Información de la rutina <button class="btn btn-danger btn-sm"><a
                    href="{{ route('rutinas-defecto.index') }}" class="text-white">Volver</a></button></h2>
            </div>
        </div>
        <hr class="mt-0 mb-4">
        <div class="container-xl px-4 mt-4 mb-5">
            <div class="row">
                <div class="col-xl-12 m-auto">
                    <!-- Rutina card-->
                    <form>
                        @csrf

                        <!-- Form Group (tipo)-->
                        <div class="col-md-12">
                            <label class="small mb-1" for="tipo">Tipo</label>
                            <input class="form-control" id="tipo" name="tipo" type="text"
                                placeholder="Introduce el tipo" value="{{ ucfirst($rutinaD->tipo) }}" disabled>
                        </div>

                        <!-- Form Group (descripcion)-->
                        <div class="col-md-12">
                            <label class="small mb-1" for="descripcion">Descripción</label>
                            <p class="m-0 col-md-12">
                                <textarea class="form-control" name="descripcion" id="descripcion" cols="68" rows="3" disabled>{{ $rutinaD->descripcion }}</textarea>
                            </p>
                        </div>

                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (numero ejercicios)-->
                            <div class="col-md-12">
                                <label class="small mb-1" for="numeroEjercicios">Número de ejercicios</label>
                                <input class="form-control" id="numeroEjercicios" name="numeroEjercicios" type="text"
                                    value="{{ $rutinaD->ejercicios->count() }}" disabled>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-xl-12 m-auto">
                    <!-- Ejercicios details -->
                    <div>
                        <h2 class="text-dark mt-5 mb-1 text-center">Ejercicios</h2>
                    </div>

                    <table class="table mt-3">
                        <thead>
                            <tr class="text-center align-middle">
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
                            @foreach ($rutinaD->ejercicios as $ejercicio)
                                <tr class="text-center align-middle">
                                    <td><img style="width: 200px" src="{{ Storage::url('ejercicios/' . $ejercicio->imagen) }}" alt="Imagen ejercicio"></td>
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
