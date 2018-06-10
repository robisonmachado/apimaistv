@extends('layouts.maistv')

@section('content')
@auth

<h2>SÉRIES</h2>
<ul class="lista_generos row justify-content-center">
    @foreach ($series as $index => $serie)
    <a href="{{ url('usuarios/'. Auth::user()->id . '/serie/' . $serie->id ) }}" tabindex="{{ $index + 2 }}">
    <li class="item_genero d-flex 
                align-items-center 
                justify-content-center  
                btn btn-primary"> {{$serie->nome}}</li>
    </a>
    @endforeach
</ul>



@endauth
@endsection