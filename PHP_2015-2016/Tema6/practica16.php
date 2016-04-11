<?php

	if (!isset($_COOKIE["contador"])) {
		$contador=1;
		setcookie("contador",$contador);
	}else{		
		$contador=$_COOKIE["contador"]+1;
		setcookie("contador",$contador);
		
	}
?>

<html>
	<head><title>Trabajando con cookies</title></head>
	<body>
	<center>

		<?php
		
		echo "<h1>Trabajando con cookies</h1><br>";
		echo "<h3>Contador de accesos</h3> <br>";

			if ($contador <= 1) {
				echo "Es la primera vez que accedes a la pagina";
			}else{
				echo "Has accedido a esta página $contador veces";
			}

		?>
		<br>
		<br>
		<br>
		<a href ="practica16.php">Actualizar</a>
		<a href ="practica16-2.php">Eliminar</a>
	</center>
	</body>
</html>