@extends('layouts.maistv')

@section('style')

@endsection

@section('content')
                <div class="title m-b-md">
                    +TV
                </div>
                <div class="subtitle m-b-md">
                    muito + diversão para você!
                </div>

                <div class="links">
                    @auth
                    <a href="{{ url('/filmes') }}">Filmes</a>
                    <a href="{{ url('/series') }}">Séries</a>
                    <a href="{{ url('/shows') }}">Shows</a>
                    <a href="{{ url('/musicas') }}">Músicas</a>
                    @endauth
                </div>
@endsection