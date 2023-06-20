<h1>Showing {{ $rutina->id }}</h1>

<div class="jumbotron text-center">
    <h2>{{ $rutina->nombre }}</h2>
    <p>
        <strong>Email:</strong> {{ $rutina->descripcion }}<br>
        <strong>Level:</strong> {{ $rutina->nerd_level }}
    </p>
</div>