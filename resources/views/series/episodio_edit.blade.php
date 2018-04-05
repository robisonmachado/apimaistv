<h2>EDITAR EPISÓDIO</h2>
<h2>SÉRIE: {{ $episodio->temporada->serie->nome }}</h2>
<h2>TEMPORADA: NÚMERO {{ $episodio->temporada->numero }} => NOME: {{ $episodio->temporada->nome }}</h2>

<a href="/temporadas/{{ $episodio->temporada->id }}/edit">VOLTAR</a>
<br>
<br>

<form action="/episodios/{{ $episodio->id }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">EXCLUIR ESTE EPISÓDIO</button>
</form>

<form action="/episodios/{{ $episodio->id }}" method="post">
    @csrf
    @method('PUT')

    <input type="hidden" name="temporada_id" value="{{ $episodio->temporada->id }}" required>

    <label for="numero">NÚMERO:</label>
    <input type="number" name="numero" value="{{ $episodio->numero }}" required>
    <br>

    <label for="nome">NOME:</label>
    <input type="text" name="nome" value="{{ $episodio->nome }}">
    <br>
    
    <label for="url_capa">URL DA CAPA:</label>
    <input type="text" name="url_capa" value="{{ $episodio->url_capa }}">
    <br>
    
    <label for="url_arquivo">URL DO ARQUIVO:</label>
    <input type="text" name="url_arquivo" value="{{ $episodio->url_arquivo }}" required>
    <br>

    <label for="descricao">DESCRICAO:</label>
    <br>
    <textarea name="descricao">{{ $episodio->descricao }}</textarea >
    <br>

    <label for="ativo">ATIVO:</label><br>
    <input type="radio" name="ativo" value="1" {{ $episodio->ativo == true ? 'checked' : null }}> SIM<br>
    <input type="radio" name="ativo" value="0" {{ $episodio->ativo == false ? 'checked' : null }}> NÃO <br>

    <br>
    <button type="submit">EDITAR EPISÓDIO</button>

</form>

