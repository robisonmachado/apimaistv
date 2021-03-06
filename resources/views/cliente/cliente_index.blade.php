@extends('layouts.maistv')

@section('style')

@endsection

@section('content')
    @auth
    

    <div class="cliente row justify-content-center align-items-center">
        <a class="col btn btn-primary" href="tv">TV</a>

        <a class="col btn btn-primary" href="usuarios/{{ Auth::user()->id }}/escolherGeneroFilme">FILMES</a>

        <a class="col btn btn-primary" href="series">SÉRIES</a>

        <a class="col btn btn-primary" href="musicas">SHOWS & MÚSICAS</a>

        <a class="col btn btn-primary" href="animes">ANIMES</a>

        <a class="col btn btn-primary" href="contato">CONTATO</a>

    </div>
            
    <h2 class="lancamentos">ÚLTIMOS TÍTULOS ADICIONADOS</h2>

    
    <div class="row align-items-center justify-content-center  lancamentos" >
      @foreach($ramdomFilmes as $filme)
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

