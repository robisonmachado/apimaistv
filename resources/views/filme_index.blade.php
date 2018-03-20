@if (session('mensagem'))
    <div class="alert alert-success">
        MENSAGEM: {{ session('mensagem') }}
    </div>
@endif

<h1>FILMES INDEX</h1>

<a href="/filmes/create">ADICIONAR FILME</a>
<br>
<a href="/generos/create">ADICIONAR GÊNERO</a>
<br>
<a href="/nacionalidades/create">ADICIONAR NACIONALIDADE</a>
<br>
<br>

<h1>FILMES: {{ $filmes->count() }}</h1>
<h2>LISTANDO OS FILMES CADASTRADOS</h2>
<ul>

@foreach ($filmes as $index => $filme)
<li> {{ ++$index }} - {{ $filme->nome}} - <a href="/filmes/{{ $filme->id}}/edit">EDITAR</a></li>

@endforeach
</ul>

<h2>LISTA DE GÊNEROS</h2>
<ul>
@foreach ($generos as $genero)
<li> {{$genero->nome}} - <a href="/generos/{{ $genero->id}}/edit">EDITAR</a></li>
    @foreach ($genero->filmes as $filme)
    <p> >>> {{$filme->nome}} </p>

    @endforeach

@endforeach
</ul>