<h2>CADASTRAR GÊNERO</h2>

<a href="/filmes">IR PARA FILMES</a>
<br>
<br>

<form action="/generos" method="post">
    @csrf
    
    <label for="nome">NOME DO GÊNERO:</label><input type="text" name="nome" required>
    <br>
    
    <label for="url_capa">URL DA CAPA:</label><input type="text" name="url_capa">
    <br>

    <br>
    <button type="submit">cadastrar gênero</button>

</form>