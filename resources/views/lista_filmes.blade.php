#EXTM3U

###############################################
######### SISTEMA GERADOR DE LISTA M3U ########
#########         versão 1.0 alfa      ########
###############################################

####  LISTA GERADA EM: {{ $data }} ###

###############################################


############### FILMES +TV ####################

@foreach( $filmesSemAdultos as $filme )

#EXTINF:-1 tvg-id="" tvg-name="{{ mb_strtoupper($filme->nome) }}" tvg-logo="{{ $filme->url_capa }}" group-title="+TV", {{ mb_strtoupper($filme->nome) }}
{{ $filme->url_arquivo }}

@endforeach

###############################################
        
@foreach( $generosComFilmes as $genero)
########### {{ mb_strtoupper($genero->nome) }} ########

@foreach( $genero->filmes as $filme)
#EXTINF:-1 tvg-id="" tvg-name="{{ mb_strtoupper($filme->nome) }}" tvg-logo="{{ $filme->url_capa }}" group-title="+TV - {{ mb_strtoupper($genero->nome) }}", {{ mb_strtoupper($filme->nome) }}
{{ $filme->url_arquivo }}

@endforeach
@endforeach



###############################################
################ FALE CONOSCO #################

#EXTINF:-1 tvg-id="" tvg-name="PEÇA UM FILME AQUI" tvg-logo="https://www.mediafire.com/convkey/b3d7/a4add3i0l3zgkaj6g.jpg" group-title="+TV - SUPORTE", PEÇA UM FILME AQUI
http://ul.to/93lvhgpz


#EXTINF:-1 tvg-id="" tvg-name="FALE COM A GENTE AQUI" tvg-logo="https://www.mediafire.com/convkey/b3d7/a4add3i0l3zgkaj6g.jpg" group-title="+TV - SUPORTE", FALE COM A GENTE AQUI
http://ul.to/93lvhgpz

###############################################




            