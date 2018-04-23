@extends('layouts.maistv')

@section('content')

<h2>LISTA DE GÊNEROS</h2>
<ul class="lista_generos row justify-content-center">
    @foreach ($generos as $genero)
    <li class="item_genero d-flex align-items-center justify-content-center"> {{$genero->nome}}</li>
    @endforeach
</ul>

<h1>FILMES: {{ $filmes->count() }}</h1>

<ul class="row">

@foreach ($filmes as $index => $filme)
<li class="col">{{ $filme->nome}} - <a href="/filmes/{{ $filme->id}}/play">PLAY</a></li>

@endforeach
</ul>



@endsection