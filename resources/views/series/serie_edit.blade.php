<h2>EDITAR SÉRIE</h2>

<a href="/series">VOLTAR</a>
<br>
<br>

<form action="/series/{{ $serie->id }}" method="post">
    @csrf
    @method('PUT')
    
    <label for="nome">NOME DA SÉRIE:</label>
    <input type="text" name="nome" value="{{ $serie->nome }}" required>
    <br>

    <label for="ano_lancamento">ANO LANÇAMENTO:</label>
    <input type="number" name="ano_lancamento" value="{{ $serie->ano_lancamento }}">
    <br>

    <label for="url_capa">URL DA CAPA:</label>
    <input type="text" name="url_capa" value="{{ $serie->url_capa }}">
    <br>
    
    <label for="descricao">DESCRICAO:</label>
    <br>
    <textarea name="descricao">{{ $serie->descricao }}</textarea >
    <br>

    <label for="ativo">ATIVO:</label><br>
    <input type="radio" name="ativo" value="1" {{ $serie->ativo == true ? 'checked' : null }} > SIM<br>
    <input type="radio" name="ativo" value="0" {{ $serie->ativo == false ? 'checked' : null }}> NÃO <br>

    <br>
    <button type="submit">EDITAR SÉRIE</button>

</form>


<p>ADICIONAR TEMPORADA</p>
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

<h2>TEMPORADAS:</h2>
@foreach( $serie->temporadas as $temporada)

NÚMERO: {{ $temporada->numero }} - NOME: {{ $temporada->nome }} <br>

@endforeach

<h2>EPISÓDIOS:</h2>
@foreach( $serie->episodios as $episodio)

NÚMERO: {{ $episodio->numero }} - NOME: {{ $episodio->nome }} <br>

@endforeach