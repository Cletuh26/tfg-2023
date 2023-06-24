<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ route('inicio') }}">
            <img src="{{ asset('assets/img/club-algar-negro.png') }}" alt="Logo empresa" id="logoEmpresa">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item">
                    <a class="nav-link px-lg-3 py-3 py-lg-4 text-dark" href="{{ route('inicio') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-lg-3 py-3 py-lg-4 text-dark" href="{{ route('rutinas.index') }}">Rutinas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-lg-3 py-3 py-lg-4 text-dark" href="{{ route('dietas.index') }}">Dietas</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link px-lg-3 py-3 py-lg-4 text-dark" href="{{ route('usuarios.show', Auth::user()->id) }}">{{ ucfirst(Auth::user()->nick) }}</a>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('login') }}">Iniciar
                            sesión</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
