<h2>CADASTRAR EPISÓDIO</h2>
<h2>SÉRIE: {{ $serie->nome }}</h2>
<h2>TEMPORADA => NÚMERO {{ $temporada->numero }} <> NOME: {{ $temporada->nome }}</h2>

<a href="/temporadas/{{ $temporada->id }}/edit">VOLTAR</a>
<br>
<br>

<form action="/episodios" method="post">
    @csrf

    <input type="hidden" name="temporada_id" value="{{ $temporada->id }}" required>

    <label for="numero">NÚMERO:</label>
    <input type="number" name="numero" required>
    <br>

    <label for="nome">NOME:</label>
    <input type="text" name="nome">
    <br>
    
    <label for="url_capa">URL DA CAPA:</label>
    <input type="text" name="url_capa">
    <br>
    
    <label for="url_arquivo">URL DO ARQUIVO:</label>
    <input type="text" name="url_arquivo" required>
    <br>

    <label for="descricao">DESCRICAO:</label>
    <br>
    <textarea name="descricao"></textarea >
    <br>

    <label for="ativo">ATIVO:</label><br>
    <input type="radio" name="ativo" value="1" checked> SIM<br>
    <input type="radio" name="ativo" value="0"> NÃO <br>

    <br>
    <button type="submit">CADASTRAR EPISÓDIO</button>

</form>

