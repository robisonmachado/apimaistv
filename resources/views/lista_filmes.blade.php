#EXTM3U

###############################################
######### SISTEMA GERADOR DE LISTA M3U ########
#########         versão 1.0 alfa      ########
###############################################

####  LISTA GERADA EM: {{ $data }} ###

################ FALE CONOSCO #################

#EXTINF:-1 group-title="+TV", PEÇA UM FILME AQUI
http://ul.to/93lvhgpz

###############################################


############### FILMES +TV ####################

@foreach( $filmesSemAdultos as $filme )

#EXTINF:-1 group-title="+TV", {{ mb_strtoupper($filme->nome) }}
{{ $filme->url_arquivo }}

@endforeach

###############################################
        
@foreach( $generosComFilmes as $genero)
########### {{ mb_strtoupper($genero->nome) }} ########

@foreach( $genero->filmes as $filme)
#EXTINF:-1 group-title="+TV - {{ mb_strtoupper($genero->nome) }}", {{ mb_strtoupper($filme->nome) }}
{{ $filme->url_arquivo }}

@endforeach
@endforeach




            