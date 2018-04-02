@if (session('mensagem'))
    <div class="alert alert-success">
        MENSAGEM: {{ session('mensagem') }}
    </div>
@endif

<h1>SÉRIES INDEX</h1>

<a href="/series/create">ADICIONAR SÉRIE</a>
<br>
<br>

<h1>SÉRIES: {{ $series->count() }}</h1>
<h2>LISTANDO AS SÉRIES CADASTRADAS</h2>
<ul>

@foreach ($series as $index => $serie)
<li> {{ ++$index }} - {{ $serie->nome}} - <a href="/series/{{ $serie->id}}/edit">EDITAR</a></li>

@endforeach
</ul>
