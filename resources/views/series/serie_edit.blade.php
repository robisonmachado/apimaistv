<h2>EDITAR SÉRIE: {{ $serie->nome }}</h2>

<a href="/series">VOLTAR</a>
<br>
<br>

<form action="/series/{{ $serie->id }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">EXCLUIR ESTA SÉRIE</button>
</form>

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


<a href="/temporadas/create/{{ $serie->id }}">ADICIONAR TEMPORADA</a>

@if (count($serie->temporadas) > 0)
<h2>TEMPORADAS:</h2>
<ul>
@foreach( $serie->temporadas as $index => $temporada)

<li>NÚMERO: {{ $temporada->numero }} - NOME: {{ $temporada->nome }} <a href="/temporadas/{{ $temporada->id}}/edit">EDITAR</a></li>

@endforeach
</ul>

<h2>LISTANDO TEMPORADAS E EPISÓDIOS:</h2>
<ul>
@foreach( $serie->temporadas as $temporada)
<li>NÚMERO: {{ $temporada->numero }} - NOME: {{ $temporada->nome }}</li>
    <ul>
    @foreach( $temporada->episodios as $episodio)
        <li>NÚMERO: {{ $episodio->numero }} - NOME: {{ $episodio->nome }} </li>
    @endforeach
    </ul>

@endforeach
</ul>

@endif