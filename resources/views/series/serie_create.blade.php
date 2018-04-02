<h2>CADASTRAR SÉRIE</h2>

<a href="/series">VOLTAR</a>
<br>
<br>

<form action="/series" method="post">
    @csrf
    
    <label for="nome">NOME DA SÉRIE:</label><input type="text" name="nome" required>
    <br>

    <label for="ano_lancamento">ANO LANÇAMENTO:</label><input type="number" name="ano_lancamento">
    <br>

    <label for="url_capa">URL DA CAPA:</label><input type="text" name="url_capa">
    <br>
    
    <label for="descricao">DESCRICAO:</label>
    <br>
    <textarea name="descricao"></textarea >
    <br>

    <label for="ativo">ATIVO:</label><br>
    <input type="radio" name="ativo" value="1" checked> SIM<br>
    <input type="radio" name="ativo" value="0"> NÃO <br>

    <br>
    <button type="submit">cadastrar série</button>

</form>