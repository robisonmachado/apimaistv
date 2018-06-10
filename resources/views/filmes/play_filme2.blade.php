<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PLAY FILME: {{ $filme->nome }}</title>
    <!-- Jquery -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

    <!-- bootstrap 4.1 jS -->
    <script type="text/javascript" src="{{ asset('js/bootstrap-4.1.0/bootstrap.bundle.min.js') }}"></script>

    <!-- bootstrap 4.1 CSS -->
    <link href="{{ asset('css/bootstrap-4.1.0/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MAISTV CSS -->
    <link href="{{ asset('css/maistv.css') }}" rel="stylesheet">

	<!-- MAISTV-PLAYER JS -->
    <script type="text/javascript" src="{{ asset('maistv-player/maistv-player.js') }}"></script>
	<!-- MAISTV-PLAYER CSS -->
    <link href="{{ asset('maistv-player/maistv-player.css') }}" rel="stylesheet">

</head>

<body>

<div class="video-container d-flex flex-column align-items-center">

	<video id="maistv-player" class="player-video" oncontextmenu="return false;">
		<source src="{{ $filme->url_arquivo }}" type="video/mp4" />
	</video>

	<div class="container-botao-play">
		<div class="subcontainer-botao-play d-flex align-items-center justify-content-center">
			<button id="botao-play" onclick="toggleFullscreen()">PLAY</button>
		</div>
	</div>

	<div class="player-controller">
				
	</div>

</div>

</body>

</html>



