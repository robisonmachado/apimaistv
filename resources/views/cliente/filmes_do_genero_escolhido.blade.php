@extends('layouts.maistv')

@section('content')
@auth

<h2>FILMES / GÊNERO: {{ $genero->nome }}</h2>


    <div class="row align-items-center justify-content-center  lancamentos" >
      @foreach($filmes as $filme)
      <a href="{{ url('filmes/'.$filme->id.'/play') }}" >
        <div class="d-flex align-items-center justify-content-center filme_container">
         
          @if($filme->temUrlCapa())
          <img src="{{ $filme->url_capa }}" alt="{{ $filme->nome }}">
          @else
          {{ $filme->nome }}
          @endif          
        </div>
        </a>
      @endforeach
    </div>


@endauth
@endsection