@include('partials.base')

<body>
    @include('partials.navbar-dark')

    @if (session('dietaCreada'))
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Información</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('dietaCreada') }} <i class="fa-solid fa-check" style="color: #2fa518;"></i>
                </div>
            </div>
        </div>
    @endif

    @if (session('dietaModificada'))
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Información</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('dietaModificada') }} <i class="fa-solid fa-check" style="color: #2fa518;"></i>
                </div>
            </div>
        </div>
    @endif

    @if (session('dietaBorrada'))
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Información</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('dietaBorrada') }} <i class="fa-solid fa-check" style="color: #2fa518;"></i>
                </div>
            </div>
        </div>
    @endif

    <main>
        <div class="col-12 text-center">
            <div>
                <h2 class="text-dark mt-15 mb-4">Información de la dieta <button class="btn btn-primary btn-sm"><a
                            href="{{ route('dietas.edit', $dieta->id) }}" class="text-white">Editar</a></button>
                    <button class="btn btn-danger btn-sm"><a href="{{ route('dietas.index') }}"
                            class="text-white">Volver</a></button>
                </h2>
            </div>
        </div>
        <hr class="mt-0 mb-4">
        <div class="container-xl px-4 mt-4 mb-5">
            <div class="row">
                <div class="col-xl-12 m-auto">
                    <!-- dieta card-->
                    <form action="{{ route('dietas.edit', $dieta->id) }}" method="post">
                        @csrf

                        <!-- Form Group (nombre)-->
                        <div class="col-md-12">
                            <label class="small mb-1" for="nombre">Nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text"
                                placeholder="Introduce el nombre" value="{{ ucfirst($dieta->nombre) }}" disabled>
                        </div>

                        <!-- Form Group (descripcion)-->
                        <div class="col-md-12">
                            <label class="small mb-1" for="descripcion">Descripción</label>
                            <p class="m-0 col-md-12">
                                <textarea class="form-control" name="descripcion" id="descripcion" cols="68" rows="3" disabled>{{ ucfirst($dieta->descripcion )}}</textarea>
                            </p>
                        </div>

                        <!-- Form Group (tipo)-->
                        <div class="col-md-12">
                            <label class="small mb-1" for="tipo">Tipo</label>
                            <input class="form-control" id="tipo" name="tipo" type="text"
                                placeholder="Introduce el tipo" value="{{ ucfirst($dieta->tipo) }}" disabled>
                        </div>

                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (numero alimentos)-->
                            <div class="col-md-12">
                                <label class="small mb-1" for="numeroalimentos">Número de alimentos</label>
                                <input class="form-control" id="numeroalimentos" name="numeroalimentos" type="text"
                                    value="{{ $dieta->alimentos->count() }}" disabled>
                            </div>
                        </div>
                    </form>
                    <!-- alimentos details -->
                    <div>
                        <h2 class="text-dark mt-5 mb-1 text-center">Alimentos
                    </div>

                    <hr class="mt-0 mb-3">

                    <table class="table mt-3">
                        <thead>
                            <tr class="text-center align-middle small">
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Tipo</th>
                                <th>Calorias</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dieta->alimentos as $alimento)
                                <tr class="text-center align-middle small">
                                    <td><img style="width: 200px"
                                            src="{{ Storage::url('alimentos/' . $alimento->imagen) }}"
                                            alt="Imagen alimento"></td>
                                    <td>{{ ucfirst($alimento->nombre) }}</td>
                                    <td>{{ ucfirst($alimento->descripcion) }}</td>
                                    <td>{{ ucfirst($alimento->tipo) }}</td>
                                    <td>{{ $alimento->calorias }} cal</td>
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
