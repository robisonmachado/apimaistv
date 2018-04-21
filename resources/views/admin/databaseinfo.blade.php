@foreach( $generos as $genero )

DB::table('generos')->insert([
	    'id' => {{$genero->id}},
            'nome' => '{{ $genero-> nome}}'
        ]);
<br>

@endforeach

<br><br><br><br><br>

@foreach( $filmes as $filme)

DB::table('filmes')->insert([
            'nome' => '{{ $filme->nome}}',
            'nacionalidade_id' => '{{ $filme->nacionalidade_id}}',
            'url_capa' => '{{ $filme->url_capa}}',
            'url_arquivo' => '{{ $filme->url_arquivo}}'
            @if($filme->ano_lancamento) ,'ano_lancamento' => {{ $filme->ano_lancamento }}
            @endif
        ]);
<br>

@endforeach