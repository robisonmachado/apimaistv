<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PLAY FILME</title>
    <!-- Jquery -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

    <!-- bootstrap 4.1 jS -->
    <script type="text/javascript" src="{{ asset('js/bootstrap-4.1.0/bootstrap.bundle.min.js') }}"></script>

    <!-- bootstrap 4.1 CSS -->
    <link href="{{ asset('css/bootstrap-4.1.0/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MAISTV CSS -->
    <link href="{{ asset('css/maistv.css') }}" rel="stylesheet">
   
   <!-- PLAYER JPLAYER-->    
   <script src="{{ asset('jPlayer-2.9.2/dist/jplayer/jquery.jplayer.js') }}"></script>
   <link href="{{ asset('jPlayer-2.9.2/dist/skin/blue.monday/css/jplayer.blue.monday.css') }}" rel="stylesheet">  

<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){

	$("#jquery_jplayer_1").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", {
				title: "{{ $filme->nome }}",
				m4v: "{{ $filme->url_arquivo }}",
				poster: "{{ $filme->url_capa }}"
			});

            $(this).jPlayer("play");
		},
		swfPath: "../../dist/jplayer",
		supplied: "webmv, ogv, m4v",
		size: {
			width: "640px",
			height: "360px",
			cssClass: "jp-video-360p"
		},
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true,
		remainingDuration: true,
		toggleDuration: true,
        fullWindow: true
	});

    $("button.jp-full-screen").click()

});
//]]>
</script>
   

    
</head>

<body>

<div id="jp_container_1" class="jp-video" role="application" aria-label="media player">
	<div class="jp-type-single">
		<div id="jquery_jplayer_1" class="jp-jplayer"></div>
		<div class="jp-gui player_video">
			<div class="jp-video-play">
				<button class="jp-video-play-icon" role="button" tabindex="0">play</button>
			</div>
			<div class="jp-interface">
				<div class="jp-progress">
					<div class="jp-seek-bar">
						<div class="jp-play-bar"></div>
					</div>
				</div>
				<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
				<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
				<div class="jp-controls-holder">
					<div class="jp-controls">
						<button class="jp-play" role="button" tabindex="0">play</button>
						<button class="jp-stop" role="button" tabindex="0">stop</button>
					</div>
					<div class="jp-volume-controls">
						<button class="jp-mute" role="button" tabindex="0">mute</button>
						<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
						<div class="jp-volume-bar">
							<div class="jp-volume-bar-value"></div>
						</div>
					</div>
					<div class="jp-toggles">
						<button class="jp-repeat" role="button" tabindex="0">repeat</button>
						<!-- <button class="jp-full-screen" role="button" tabindex="0">full screen</button> -->
					</div>
				</div>
				<div class="jp-details">
					<div class="jp-title" aria-label="title">&nbsp;</div>
				</div>
			</div>
		</div>
		<div class="jp-no-solution">
			<span>Atenção</span>
			Não foi possível executar o vídeo
		</div>
	</div>
</div>

 

</body>

</html>



