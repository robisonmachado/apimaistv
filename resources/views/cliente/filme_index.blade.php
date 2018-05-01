@extends('layouts.maistv')

@section('content')
@auth

<h2>GÊNEROS</h2>
<ul class="lista_generos row justify-content-center">
    @foreach ($generos as $index => $genero)
    <li class="item_genero d-flex 
                align-items-center 
                justify-content-center  
                btn btn-primary" tabindex="{{ $index }}"> {{$genero->nome}}</li>
    @endforeach
</ul>

<ul class="row">


@foreach ($filmes as $index => $filme)
<li class="col">{{ $filme->nome}} - <a href="/filmes/{{ $filme->id}}/play" tabindex="{{ $index + $generos->count() }}">PLAY</a></li>

@endforeach
</ul>


@endauth
@endsection