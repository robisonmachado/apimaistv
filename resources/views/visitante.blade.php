@extends('layouts.maistv')

@section('style')

@endsection

@section('content')
                <div class="title">
                    +TV
                </div>
                <div class="subtitle">
                    muito + diversão para você!
                </div>

                <div class="links row justify-content-around align-items-center">
                    
                    <a href="{{ url('/tv') }}">TV</a>
                    <a href="{{ url('/filmes') }}">Filmes</a>
                    <a href="{{ url('/series') }}">Séries</a>
                    <a href="{{ url('/musicas') }}">Shows & Músicas</a>
                    <a href="{{ url('/animes') }}">Animes</a>
                    
                </div>

@endsection

