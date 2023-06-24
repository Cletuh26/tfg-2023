@include('partials.base')

<body>
    {{-- Comprobaciones de eventos --}}
    @if (session('logout'))
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Información</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('logout') }} <i class="fa-solid fa-check" style="color: #2fa518;"></i>
                </div>
            </div>
        </div>
    @endif

    @if (session('login'))
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Información</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('login') }} <i class="fa-solid fa-check" style="color: #2fa518;"></i>
                </div>
            </div>
        </div>
    @endif

    @if (session('registro'))
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Información</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('registro') }} <i class="fa-solid fa-check" style="color: #2fa518;"></i>
                </div>
            </div>
        </div>
    @endif

    @include('partials.navbar')

    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Nutrición Algar</h1>
                        <span class="subheading">Crea tu plan de entrenamiento sin complicaciones</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center gap-3 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/img/rutinas.jpeg') }}" class="card-img-top pt-3" alt="Imagen carta">
                <div class="card-body">
                    <h5 class="card-title">Rutinas</h5>
                    <p class="card-text">¿Estas intentado agrandar tus músculos? ¿Buscas una rutina para bajar tu
                        peso? Descúbrelas todas y si no, créala.</p>
                    <a href="{{ route('rutinas.index') }}" class="btn btn-outline-primary">Más información</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/img/dietas.jpg') }}" class="card-img-top pt-3" alt="Imagen carta">
                <div class="card-body">
                    <h5 class="card-title">Dietas</h5>
                    <p class="card-text">Encuentra la dieta que más se ajuste a tus gustos. Si eso no funciona,
                        siempre puedes crear la tuya personalizada!</p>
                    <a href="#" class="btn btn-outline-primary">Más
                        información</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/img/ejercicios.jpg') }}" class="card-img-top pt-3" alt="Imagen carta">
                <div class="card-body">
                    <h5 class="card-title">Ejercicios</h5>
                    <p class="card-text">Explora el listado de ejercicios que ofrecemos. Si no encuentras el que estas
                        buscando, añadelo tu mismo!</p>
                    <a href="#" class="btn btn-outline-primary">Más
                        información</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/img/alimentos.jpg') }}" class="card-img-top pt-3" alt="Imagen carta">
                <div class="card-body">
                    <h5 class="card-title">Alimentos</h5>
                    <p class="card-text">Disponemos de una amplia variedad de alimentos para hacer unas dietas
                        variadas para cada tipo de persona.</p>
                    <a href="#" class="btn btn-outline-primary">Más
                        información</a>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
</body>

</html>
