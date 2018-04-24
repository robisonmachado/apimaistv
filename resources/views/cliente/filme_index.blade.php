@extends('layouts.maistv')

@section('content')

<h2>GÊNEROS</h2>
<ul class="lista_generos row justify-content-center">
    @foreach ($generos as $genero)
    <li class="item_genero d-flex align-items-center justify-content-center  btn btn-primary"> {{$genero->nome}}</li>
    @endforeach
</ul>

<ul class="row">

@foreach ($filmes as $index => $filme)
<li class="col">{{ $filme->nome}} - <a href="/filmes/{{ $filme->id}}/play">PLAY</a></li>

@endforeach
</ul>



@endsection