<h2>CADASTRAR TEMPORADA</h2>
<h2>SÉRIE: {{ $serie->nome }}</h2>
<a href="/series">VOLTAR</a>
<br>
<br>

<form action="/temporadas" method="post">
    @csrf

    <input type="hidden" name="serie_id" value="{{ $serie->id }}" required>

    <label for="numero">NÚMERO:</label>
    <input type="number" name="numero" required>
    <br>

    <label for="nome">NOME:</label>
    <input type="text" name="nome">
    <br>

    <label for="ano_lancamento">ANO LANÇAMENTO:</label>
    <input type="number" name="ano_lancamento">
    <br>

    <label for="url_capa">URL DA CAPA:</label>
    <input type="text" name="url_capa">
    <br>
    
    <label for="descricao">DESCRICAO:</label>
    <br>
    <textarea name="descricao"></textarea >
    <br>

    <label for="ativo">ATIVO:</label><br>
    <input type="radio" name="ativo" value="1" checked> SIM<br>
    <input type="radio" name="ativo" value="0"> NÃO <br>

    <br>
    <button type="submit">CADASTRAR TEMPORADA</button>

</form>