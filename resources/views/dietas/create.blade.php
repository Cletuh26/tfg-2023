@include('partials.base')

<body>
    @include('partials.navbar-dark')

    <main>
        <div class="col-12 text-center">
            <div>
                <h2 class="text-dark mt-15 mb-4">Crear dieta</h2>
            </div>
        </div>
        <hr class="mt-0 mb-4">
        <div class="container-xl px-4 mt-4 mb-5">
            <div class="row">
                <div class="col-xl-12 m-auto">
                    <!-- Dieta card-->
                    <form action="{{ route('dietas.store') }}" method="post">
                        @csrf

                        <!-- Form Group (nombre)-->
                        <div class="col-md-12">
                            <label class="small mb-1" for="nombre">Nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text"
                                placeholder="Introduce el nombre" value="{{ old('nombre') }}">
                            @error('nombre')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Form Group (descripcion)-->
                        <div class="col-md-12">
                            <label class="small mb-1" for="descripcion">Descripción</label>
                            <p class="m-0 col-md-12">
                                <textarea class="form-control" name="descripcion" id="descripcion" cols="68" rows="3"
                                    placeholder="Introduce la descripción">{{ old('descripcion') }}</textarea>
                            </p>
                            @error('descripcion')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Form Group (tipo)-->
                        <div class="col-md-12">
                            <label class="small mb-1" for="tipo">Tipo</label>
                            <select class="form-control" name="tipo" id="tipo">
                                <option value="equilibrada" selected>Equilibrada</option>
                                <option value="deficit">Deficit</option>
                                <option value="calorica">Calorica</option>
                                <option value="personalizada">Personalizada</option>
                            </select>
                        </div>

                        <!-- Alimentos Section-->
                        <div class="col-md-12 text-center">
                            <h2 class="mt-5">Alimentos</h2>
                            <small>Selecciona los alimentos que quieres que tenga la dieta</small>
                        </div>

                        <hr class="mt-0 mb-4">

                        <!-- Mostrar mensaje de error -->
                        @error('alimentosSeleccionados')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <table class="table mt-3">
                            <thead>
                                <tr class="text-center align-middle small">
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Tipo</th>
                                    <th>Calorias</th>
                                    <th>Añadir</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alimentos as $alimento)
                                    <tr class="text-center align-middle small">
                                        <td><img src="{{ '' }}" alt="Imagen alimento"></td>
                                        <td>{{ ucfirst($alimento->nombre) }}</td>
                                        <td>{{ $alimento->descripcion }}</td>
                                        <td>{{ ucfirst($alimento->tipo) }}</td>
                                        <td>{{ $alimento->calorias }} cal</td>
                                        <td>
                                            <input type="checkbox" name="marcado" id="marcado"
                                                value="{{ $alimento->id }}">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <input type="hidden" id="alimentosSeleccionados" name="alimentosSeleccionados">

                        <div class="col-md-12 text-center">
                            <button class="btn btn-success mt-3" type="submit" onclick="seleccionarAlimentos()">Crear
                                dieta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script>
        function seleccionarAlimentos() {
            // Obtener todos los checkboxes
            var checkboxes = document.querySelectorAll('input[name="marcado"]:checked');

            // Obtener los valores de los checkboxes seleccionados
            var valoresSeleccionados = Array.from(checkboxes).map(function(checkbox) {
                return checkbox.value;
            });

            // Establecer los valores en el campo de entrada oculto
            document.getElementById('alimentosSeleccionados').value = JSON.stringify(valoresSeleccionados);
        }
    </script>
    @include('partials.footer')
</body>
