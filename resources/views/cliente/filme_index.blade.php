@extends('layouts.maistv')

@section('content')

<h1>FILMES: {{ $filmes->count() }}</h1>

<ul>

@foreach ($filmes as $index => $filme)
<li> {{ ++$index }} - {{ $filme->nome}} - <a href="/filmes/{{ $filme->id}}/edit">EDITAR</a></li>

@endforeach
</ul>

<h2>LISTA DE GÊNEROS</h2>
<ul>
@foreach ($generos as $genero)
<li> {{$genero->nome}} - <a href="/generos/{{ $genero->id}}/edit">EDITAR</a></li>
    @foreach ($genero->filmes as $filme)
    <p> >>> {{$filme->nome}} </p>

    @endforeach

@endforeach
</ul>

@endsection