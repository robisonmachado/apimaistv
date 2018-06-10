#EXTM3U

###############################################
######### SISTEMA GERADOR DE LISTA M3U ########
######### versão 0.4 alfa - 10/06/2018 ########
###############################################
###############################################
####  LISTA GERADA EM: {{ $data }} ###

###############################################

@foreach( $generosComFilmes as $genero)
########### {{ mb_strtoupper($genero->nome) }} ########


@foreach( $genero->filmes as $filme)
#EXTINF:-1 tvg-id="" tvg-name="{{ mb_strtoupper($filme->nome) }}" tvg-logo="{{ $filme->url_capa }}" group-title="+{{ mb_strtoupper($genero->nome) }}", {{ mb_strtoupper($filme->nome) }}
{{ $filme->url_arquivo }}

@endforeach
@endforeach



###############################################
################### SÉRIES ####################

@foreach( $series as $serie)
########### SÉRIE {{ mb_strtoupper($serie->nome) }} ########


@foreach( $serie->temporadas as $temporada)
@foreach( $temporada->episodios as $episodio)
#EXTINF:-1 tvg-id="" tvg-name="{{ mb_strtoupper($serie->nome) }} T{{ sprintf('%02d', $temporada->numero) }}E{{ sprintf('%03d', $episodio->numero) }}" tvg-logo="{{ $temporada->url_capa }}" group-title="SÉRIE {{ mb_strtoupper($serie->nome) }}", {{ mb_strtoupper($serie->nome) }} T{{ sprintf('%02d', $temporada->numero) }}E{{ sprintf('%03d', $episodio->numero) }}
{{ $episodio->url_arquivo }}


@endforeach
@endforeach 
@endforeach

###############################################
################## SUPORTE ####################

#EXTINF:-1 tvg-id="" tvg-name="FALE COM A GENTE AQUI" tvg-logo="https://www.mediafire.com/convkey/b3d7/a4add3i0l3zgkaj6g.jpg" group-title="+SUPORTE", FALE COM A GENTE AQUI
http://www.mediafire.com/file/ckt8jmjppbwcij3/FALE_CONOSCO.mp4

###############################################
###############################################