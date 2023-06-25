@include('partials.base')

<body>

    @include('partials.navbar-dark')

    {{-- @if (session('rutinaBorrada'))
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
    @endif --}}

    <main>
        <div class="col-12 mt-15 text-center mb-3">
            <div>
                <h2 class="text-dark">Rutinas predefinidas</h2>
            </div>
        </div>
        <hr class="mt-0 mb-4">
        <div class="container-xl px-4 mt-4 mb-5">
            <div class="row">
                <div class="col-xl-12 m-auto">
                    <table class="table mt-3">
                        <thead>
                            <tr class="text-center align-middle small">
                                <th>Imagen</th>
                                <th>Tipo</th>
                                <th>Descripción</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rutinasD as $rutina)
                                <tr class="text-center align-middle small">
                                    <td><img src="{{ '' }}" alt="Imagen rutina"></td>
                                    <td>{{ ucfirst($rutina->tipo) }}</td>
                                    <td>{{ $rutina->descripcion }}</td>
                                    <td>
                                        <form action="{{ route('rutinas-defecto.show', $rutina->id) }}" method="get">
                                            @csrf
                                            <button class="btn btn-primary btn-sm" type="submit"><i
                                                    class="fa-solid fa-eye"></i> Ver rutina</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </section>
        </div>
    </main>
    @include('partials.footer')

</body>
