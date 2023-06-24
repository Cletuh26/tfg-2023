@include('partials.base')

<body>
    @include('partials.navbar-dark')

    <main class="row w-100 mt-15">
        <div class="col-12 mt-3 text-center mb-3">
            <div>
                <h2 class="text-dark">Rutinas predefinidas</h2>
            </div>
        </div>

        <section id="gallery">
            <div class="container">
                <div class="row">
                    @foreach ($rutinasDefecto as $rutinaD)
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <img src="{{ asset('assets/img/rutinas_defecto/equilibrada.jpeg') }}"
                                    alt="Imagen rutina" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{ ucfirst($rutinaD->tipo) }}</h5>
                                    <p class="card-text">{{ $rutinaD->descripcion }}</p>
                                    <a href="{{ route('rutinas.show', $rutinaD->id) }}" class="btn btn-outline-primary btn-md">Ver rutina</a>
                                    {{-- <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <div class="col-12 mt-5 text-center">
            <div>
                <h2 class="text-dark">Rutinas personalizadas</h2>
            </div>
        </div>

        @if (count($rutinasPersonalizadas) < 1)
            <div class="col-12 mt-1 text-center">
                <div>
                    <h5 class="text-danger">No se han encontrado rutinas personalizadas</h5>
                    <a href="{{ route('rutinas.create') }}" class="btn btn-outline-success mb-5"><i
                            class="fa-solid fa-plus"></i>
                        Crear nueva rutina</a>
                </div>
            </div>
        @else
            <div class="col-12 mt-4 d-flex justify-content-center align-items-center gap-5 mb-3">
                @foreach ($rutinasPersonalizadas as $rutinaP)
                    <div class="card" style="width: 18rem;">
                        <img src="{{ Storage::url($rutinaP->imagen) }}" class="card-img-top" alt="Imagen rutina">
                        <div class="card-body">
                            <h4 class="card-title">{{ ucfirst($rutinaP->tipo) }}</h4>
                            <p class="card-text">{{ ucfirst($rutinaP->descripcion) }}</p>
                            <a href="{{ route('rutinas.show', $rutinaP->id) }}" class="btn btn-outline-primary">Ver rutina</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </main>

    @include('partials.footer');
</body>
