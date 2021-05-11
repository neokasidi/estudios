

<?php 
	if (isset($mysqli)) {
		$mysqli->close();
	}
?>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function(){
    	$('input[type=text]').addClass("form-control");
	});

	function format(e){
		var num = e.value.replace(/\./g,'');;		
		if(!isNaN(num)){
		  num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
		  num = num.split('').reverse().join('').replace(/^[\.]/,'');
		  e.value = num;
		}else{
			mensaje("Ingresar solo numeros!");   
			e.value = "";
			limpiar();
		}
	}

	function validaLargo(e){
		if (e.value.split('').length < 4) {
			mensaje("Faltan digitos al año");
			limpiar();
		}
	}

	function limpiar(){
		setTimeout(
			function()
			{ 
				$('#response').html("");
			}, 2000);
	}

	function mensaje(mensaje){
		$('#response').html(mensaje);
	}
</script>