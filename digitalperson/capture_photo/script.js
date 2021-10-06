
function tieneSoporteUserMedia() {
    return !!(navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia)
}
function _getUserMedia() {
    return (navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia).apply(navigator, arguments);
}

// Declaramos elementos del DOM
var $video = document.getElementById("video"),
	$canvas = document.getElementById("canvas"),
	$boton = document.getElementById("boton"),
	$estado = document.getElementById("estado");
if (tieneSoporteUserMedia()) {
    _getUserMedia(
        {video: true},
        function (stream) {
            console.log("Permiso concedido");
            $video.srcObject = stream;
			//$video.src = window.URL.createObjectURL(stream);
			$video.play();

			//Escuchar el click
			$boton.addEventListener("click", function(){

				//Pausar reproducción
				$video.pause();

				//Obtener contexto del canvas y dibujar sobre él
				var contexto = $canvas.getContext("2d");
				$canvas.width = $video.videoWidth;
				$canvas.height = $video.videoHeight;
				contexto.drawImage($video, 0, 0, $canvas.width, $canvas.height);

				var foto = $canvas.toDataURL(); //Esta es la foto, en base 64
				$estado.innerHTML = "Enviando foto. Por favor, espera...";
				var xhr = new XMLHttpRequest();
				xhr.open("POST", "./guardar_foto.php", true);
				xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhr.send(encodeURIComponent(foto)); //Codificar y enviar

				xhr.onreadystatechange = function() {
				    if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
				        console.log("La foto fue enviada correctamente");
				        console.log(xhr);
						$estado.innerHTML = " Se ha tomado la captura, por favor presione guardar ";
						$('.video').addClass('d-none');
						$('.capture').removeClass('d-none');
						$('.capture').attr("src" , xhr.responseText);
						$('.capture_name').val(xhr.responseText);
				        //$estado.innerHTML = btn_close + " Foto guardada con éxito. Puedes verla <a target='_blank' href='./" + xhr.responseText + "'> aquí</a>";
				    }
				}
				$('.alert').removeClass('d-none');
				//$(".alert").hide().show('medium');
				dissablecontrols(0);
				enablecontrols(1);
				//Reanudar reproducción
				$video.play();
			});
        }, function (error) {
            console.log("Permiso denegado o error: ", error);
            $estado.innerHTML = "No se puede acceder a la cámara, o no diste permiso.";
        });
} else {
    alert("Lo siento. Tu navegador no soporta esta característica");
    $estado.innerHTML = "Parece que tu navegador no soporta esta característica. Intenta actualizarlo.";
}

$(".trash").on("click",function(e){
	if (confirm("¿Esta seguro que desea eliminar captura?")) {
		var capture = $('.capture_name').val();
		
		axios
		.post('guardar_foto.php', {params:{
			action: 1,
			capture
		}})
		.then(res => console.log(this.data));

		clean();
		enablecontrols(0);
		dissablecontrols(1);
    }
});

function clean(){
	$('.video').removeClass('d-none');
	$('.capture').addClass('d-none');
	$('.capture').attr("src" , "");
	$(".camera").removeAttr("disabled");
	$('.alert').addClass('d-none');
}

function enablecontrols(action){
	if(action){
		$(".camera").attr('disabled', '');
	}else{
		$(".camera").removeAttr("disabled");
	}
}

function dissablecontrols(action){
	if(action){
		$('.save').attr('disabled', '');
		$('.trash').attr('disabled', '');
	}else{
		$(".save").removeAttr("disabled");
		$(".trash").removeAttr("disabled");
	}

}