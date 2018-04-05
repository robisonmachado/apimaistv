<h2>EDITAR TEMPORADA</h2>
<h2>SÉRIE: {{ $serie->nome }}</h2>
<a href="/series/{{ $serie->id }}/edit">VOLTAR</a>
<br>
<br>

<form action="/temporadas/{{ $temporada->id }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">EXCLUIR ESTA TEMPORADA</button>
</form>

<form action="/temporadas/{{ $temporada->id }}" method="post">
    @csrf
    @method('PUT')

    <input type="hidden" name="serie_id" value="{{ $serie->id }}" required>

    <label for="numero">NÚMERO:</label>
    <input type="number" name="numero" value="{{ $temporada->numero }}" required>
    <br>

    <label for="nome">NOME:</label>
    <input type="text" name="nome" value="{{ $temporada->nome }}">
    <br>

    <label for="ano_lancamento">ANO LANÇAMENTO:</label>
    <input type="number" name="ano_lancamento" value="{{ $temporada->ano_lancamento }}">
    <br>

    <label for="url_capa">URL DA CAPA:</label>
    <input type="text" name="url_capa" value="{{ $temporada->url_capa }}">
    <br>
    
    <label for="descricao">DESCRICAO:</label>
    <br>
    <textarea name="descricao">{{ $temporada->descricao }}</textarea >
    <br>

    <label for="ativo">ATIVO:</label><br>
    <input type="radio" name="ativo" value="1" {{ $temporada->ativo == true ? 'checked' : null }}> SIM<br>
    <input type="radio" name="ativo" value="0" {{ $temporada->ativo == false ? 'checked' : null }}> NÃO <br>

    <br>
    <button type="submit">EDITAR TEMPORADA</button>

</form>

<a href="/episodios/create/{{ $temporada->id }}">ADICIONAR EPISÓDIO</a>

@if ( count($temporada->episodios) > 0 )
<h2>EPISÓDIOS:</h2>
@foreach( $temporada->episodios as $episodio)

NÚMERO: {{ $episodio->numero }} - NOME: {{ $episodio->nome }} <a href="/episodios/{{ $episodio->id}}/edit">EDITAR</a><br>

@endforeach

@endif
