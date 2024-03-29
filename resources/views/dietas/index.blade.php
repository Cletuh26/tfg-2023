@include('partials.base')

<body>

    @include('partials.navbar-dark')

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

    @if (session('dietaError'))
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Información</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('dietaError') }} <i class="fa-solid fa-xmark text-danger"></i></i>
                </div>
            </div>
        </div>
    @endif

    <main>
        <div class="col-12 mt-15 text-center mb-3">
            <div>
                <h2 class="text-dark">Dietas</h2>
            </div>
        </div>
        <hr class="mt-0 mb-4">
        <div class="container-xl px-4 mt-4 mb-5">
            <div class="row">
                <div class="col-xl-12 m-auto">
                    @if (count($dietas) < 1)
                        <div class="col-12 mt-1 text-center">
                            <div>
                                <h5 class="text-danger">No se han encontrado dietas</h5>
                                <a href="{{ route('dietas.create') }}" class="btn btn-outline-success mb-5 mt-3"><i
                                        class="fa-solid fa-plus"></i>
                                    Crear nueva dieta</a>
                            </div>
                        </div>
                    @else
                        <table class="table mt-3">
                            <thead>
                                <tr class="text-center align-middle small">
                                    <th>Imagen</th>
                                    <th>Tipo</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th colspan="2">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dietas as $dieta)
                                    <tr class="text-center align-middle small">
                                        <td><img style="width: 200px" src="{{ Storage::url('dietas/' . $dieta->imagen) }}" alt="Imagen dieta"></td>
                                        <td>{{ ucfirst($dieta->tipo) }}</td>
                                        <td>{{ ucfirst($dieta->nombre) }}</td>
                                        <td>{{ ucfirst($dieta->descripcion) }}</td>
                                        <td>
                                            <form action="{{ route('dietas.show', $dieta->id) }}" method="post">
                                                @csrf @method('get')
                                                <button class="btn btn-primary btn-sm" type="submit"><i
                                                        class="fa-solid fa-eye"></i> Información</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('dietas.destroy', $dieta->id) }}" method="post">
                                                @csrf @method('delete')
                                                <button class="btn btn-danger btn-sm" type="submit"><i
                                                        class="fa-solid fa-trash text-white"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="col-12 mt-1 text-center">
                            <div>
                                <a href="{{ route('dietas.create') }}" class="btn btn-outline-success mb-5 mt-3"><i
                                        class="fa-solid fa-plus"></i>
                                    Crear nueva dieta</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            </section>
        </div>
    </main>
    @include('partials.footer')

</body>
