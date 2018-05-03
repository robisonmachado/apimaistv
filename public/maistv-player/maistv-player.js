
function toggleFullscreen(event) {
	//var element = document.getElementById("player");
	var element = $('#maistv-player').get(0);
	console.log(element)


	if (event instanceof HTMLElement) {
		element = event;
	}

	var isFullscreen = document.webkitIsFullScreen || document.mozFullScreen || false;

	element.requestFullScreen = element.requestFullScreen || 
								element.webkitRequestFullScreen || 
								element.mozRequestFullScreen || 
								element.webkitEnterFullscreen || 
								function () { return false; };
		
	document.cancelFullScreen = document.cancelFullScreen || 
								document.webkitCancelFullScreen || 
								document.mozCancelFullScreen || 
								function () { return false; };

	isFullscreen ? document.cancelFullScreen() : element.requestFullScreen();
	$('#maistv-player').get(0).play();
	$('#maistv-player').get(0).controls = false
}


function bloqueia_mouse_teclado() {

    $(document).ready(function() {
        // CTRL V v
        $(document).keydown(function(event) {
            if (event.ctrlKey == true && (event.which == '118' || event.which == '86')) {
                event.preventDefault();
            }
        });
        
        // CTRL C c
        $(document).keydown(function(event) {
            if (event.ctrlKey == true && (event.which == '97' || event.which == '67')) {
                event.preventDefault();
            }
        });

        // CTRL U u
        $(document).keydown(function(event) {
            if (event.ctrlKey == true && (event.which == '85' || event.which == '117')) {
                event.preventDefault();
            }
        });
        
        // CTRL A a
        $(document).keydown(function(event) {
            if (event.ctrlKey == true && (event.which == '65' || event.which == '97')) {
                event.preventDefault();
            }
        });

        // CTRL S s
        $(document).keydown(function(event) {
            if (event.ctrlKey == true && (event.which == '83' || event.which == '115')) {
                event.preventDefault();
            }
        });
        
        
        // CTRL X x
        $(document).keydown(function(event) {
            if (event.ctrlKey == true && (event.which == '88' || event.which == '120')) {
                event.preventDefault();
            }
        });


        // CTRL J j
        $(document).keydown(function(event) {
            if (event.ctrlKey == true && (event.which == '74' || event.which == '106')) {
                event.preventDefault();
            }
        });
        

        // Bloquear botão direito do mouse
        $(document).bind("contextmenu", function(e) {
            return false;
        });

    })

}





bloqueia_mouse_teclado();
