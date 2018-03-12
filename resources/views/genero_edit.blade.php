<h2>EDITAR GÊNERO</h2>

<a href="/filmes">IR PARA FILMES</a>
<br>
<br>

@if (session('editado'))
    <div class="alert alert-success">
        GÊNERO EDITADO COM SUCESSO! GÊNERO: {{ session('editado') }}
    </div>
@endif

<form action="/generos/{{ $genero->id }}" method="post">
    @csrf
    @method('DELETE')
    <br>
    <button type="submit">EXCLUIR ESTE GÊNERO</button>
    <br>
</form>

<form action="/generos/{{ $genero->id }}" method="post">
    @csrf

    @method('PUT')
    
    <label for="nome">NOME DO GÊNERO:</label>
    <input type="text" name="nome" value="{{ $genero->nome }}" required>
    <br>
    
    <label for="url_capa">URL DA CAPA:</label>
    <input type="text" name="url_capa" value="{{ $genero->capa }}">
    <br>

    <br>
    <button type="submit">EDITAR GÊNERO</button>

</form>

<h2>FILMES RELACIONADOS A ESTE GÊNERO:</h2>
<ul>
@foreach ($filmes as $filme)
        <li>{{ $filme->nome }}</li>
@endforeach
</ul>
