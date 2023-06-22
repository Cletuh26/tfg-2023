<h1>Showing {{ $usuario->id }}</h1>

<div class="jumbotron text-center">
    <h2>{{ $usuario->nombre }}</h2>
    <p>
        <strong>Email:</strong> {{ $usuario->descripcion }}<br>
        <strong>Level:</strong> {{ $usuario->nerd_level }}
    </p>
</div>