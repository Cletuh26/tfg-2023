@include('partials.base')

<body>
    {{-- Comprobaciones de inicio de sesion --}}
    {{-- @if (session('logout'))
        <div class="rounded alert-success p-3 text-center">
            {{ session('logout') }}
        </div>
    @endif

    @if (session('login'))
        <div class="rounded alert-success p-3 text-center">
            {{ session('login') }}
        </div>
    @endif

    @if (session('registro'))
        <div class="rounded alert-success p-3 text-center">
            {{ session('registro') }}
        </div>
    @endif --}}

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
                    <a href="{{ route('rutinas.index') }}" class="btn text-white rounded" style="background-color:#009de2">Más información</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/img/dietas.jpg') }}" class="card-img-top pt-3" alt="Imagen carta">
                <div class="card-body">
                    <h5 class="card-title">Dietas</h5>
                    <p class="card-text">Encuentra la dieta que más se ajuste a tus gustos. Si eso no funciona,
                        siempre puedes crear la tuya personalizada!</p>
                    <a href="#" class="btn text-white rounded" style="background-color:#009de2">Más información</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/img/ejercicios.jpg') }}" class="card-img-top pt-3" alt="Imagen carta">
                <div class="card-body">
                    <h5 class="card-title">Ejercicios</h5>
                    <p class="card-text">Explora el listado de ejercicios que ofrecemos. Si no encuentras el que estas buscando, añadelo tu mismo!</p>
                    <a href="#" class="btn text-white rounded" style="background-color:#009de2">Más información</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/img/alimentos.jpg') }}" class="card-img-top pt-3" alt="Imagen carta">
                <div class="card-body">
                    <h5 class="card-title">Alimentos</h5>
                    <p class="card-text">Disponemos de una amplia variedad de alimentos para hacer unas dietas
                        variadas para cada tipo de persona.</p>
                    <a href="#" class="btn text-white rounded" style="background-color:#009de2">Más información</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer class="border-top py-2">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="https://github.com/Cletuh26/tfg-2023" target="_blank">
                                <h1 class="p-0 m-0"><i class="fa-brands fa-github" style="color: #009de2;"></i></h1>
                            </a>
                        </li>
                    </ul>
                    <div class="small text-center text-muted fst-italic">Todos los derechos reservados &copy; Nutrición
                        Algar 2023</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core theme JS-->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script> --}}
</body>

</html>
