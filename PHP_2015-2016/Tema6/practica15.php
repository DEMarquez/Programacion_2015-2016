<html>
	<head><title>Ejempo cookies</title></head>
	<body>
		<?php

			if (!isset($_COOKIE["usuario"])) {
				echo "Bienvenido a la página!";
				echo "La cookie 'usuario' no está inicializada!";
				setcookie("usuario","usuario1");
			}else{
				echo "La cookie: 'usuario' está inicializada <br>";
				echo "Su valor es: " . $_COOKIE["usuario"] . "<br>";
				echo "Bienvenido a la página " . $_COOKIE["usuario"];
			}
			echo "<br><br><b>quizá tengas que recargar la página</b>";
		?>
	</body>
</html>	