@extends('layouts.maistv')

@section('content')
@auth

<h2>GÊNEROS</h2>
<ul class="lista_generos row justify-content-center">
    @foreach ($generos as $index => $genero)
    <a href="{{ url('usuarios/'. Auth::user()->id . '/filmes/genero/' . $genero->id ) }}" tabindex="{{ $index + 2 }}">
    <li class="item_genero d-flex 
                align-items-center 
                justify-content-center  
                btn btn-primary"> {{$genero->nome}}</li>
    </a>
    @endforeach
</ul>



@endauth
@endsection