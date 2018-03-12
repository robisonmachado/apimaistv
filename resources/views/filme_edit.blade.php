<h2>EDITAR FILME</h2>

<a href="/filmes">VOLTAR</a><br>

@if (session('editado'))
    <div class="alert alert-success">
        FILME EDITADO COM SUCESSO! FILME: {{ session('editado') }}
    </div>
@endif

<form action="/filmes/{{ $filme->id }}" method="post">
    @csrf
    @method('DELETE')
    <br>
    <button type="submit">EXCLUIR ESTE FILME</button>
    <br>
</form>

<form action="/filmes/{{ $filme->id }}" method="post">
    @csrf

    @method('PUT')

    <label for="nome">NOME DO FILME:</label>
    <input type="text" name="nome"  value="{{ $filme->nome }}" required>
    <br>

    <label for="nacionalidade_id">NACIONALIDADE DO FILME:</label>
    <select name="nacionalidade_id" required>
    @foreach ($nacionalidades as $nacionalidade)
        <option value="{{ $nacionalidade->id}}"
            @if ($nacionalidade->id == $filme->nacionalidade_id)
                {{ 'selected' }}
            @endif
        >{{ $nacionalidade->nome}}
        <br>
    @endforeach
    </select>

    <br>


    <label for="ano_lancamento">ANO LANÇAMENTO:</label>
    <input type="number" name="ano_lancamento" value="{{ $filme->ano_lancamento }}">
    <br>

    <label for="url_capa">URL DA CAPA:</label>
    <input type="text" name="url_capa" value="{{ $filme->url_capa }}">
    <br>

    <label for="url_arquivo">URL DO ARQUIVO:</label>
    <input type="text" name="url_arquivo" value="{{ $filme->url_arquivo }}" required>
    <br>

    <label for="url_arquivo_encurtada">URL ENCURTADA:</label>
    <input type="text" name="url_arquivo_encurtada" value="{{ $filme->url_arquivo_encurtada }}">
    <br>

    <p>GÊNEROS: </p>
    @foreach ($generos as $genero)
        <input type="checkbox" name="generos[]" value="{{ $genero->id}}"
        
        @if ( $filme->generos->contains($genero->id) )
            {{ 'checked' }}
        @endif

        > {{ $genero->nome}}
        <br>
    @endforeach

    <br>
    <button type="submit">EDITAR FILME</button>

</form>