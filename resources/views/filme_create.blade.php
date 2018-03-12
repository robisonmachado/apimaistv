<h2>CADASTRAR FILME</h2>

<a href="/filmes">VOLTAR</a>
<br>
<br>

<form action="/filmes" method="post">
    @csrf
    
    <label for="nome">NOME DO FILME:</label><input type="text" name="nome" required>
    <br>

    <label for="nacionalidade_id">NACIONALIDADE DO FILME:</label>
    <select name="nacionalidade_id" required>
    @foreach ($nacionalidades as $nacionalidade)
        <option value="{{ $nacionalidade->id}}">{{ $nacionalidade->nome}}
        <br>
    @endforeach
    </select>

    <br>



    <label for="ano_lancamento">ANO LANÇAMENTO:</label><input type="number" name="ano_lancamento">
    <br>

    <label for="url_capa">URL DA CAPA:</label><input type="text" name="url_capa">
    <br>

    <label for="url_arquivo">URL DO ARQUIVO:</label><input type="text" name="url_arquivo" required>
    <br>

    <label for="url_arquivo_encurtada">URL ENCURTADA:</label><input type="text" name="url_arquivo_encurtada">
    <br>

    <p>GÊNEROS: </p>
    @foreach ($generos as $genero)
        <input type="checkbox" name="generos[]" value="{{ $genero->id}}">{{ $genero->nome}}
        <br>
    @endforeach

    <br>
    <button type="submit">cadastrar filme</button>

</form>