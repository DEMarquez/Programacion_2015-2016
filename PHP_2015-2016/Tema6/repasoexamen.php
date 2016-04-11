<?php
	var_dump($_COOKIE);
	if (isset($_COOKIE["nombre"])) {
		//true las cookies nombre existe
		echo '
		<html>
		<body>
			<h1>Bienvenido " . $_COOKIE["nombre"] . "</h1>
		</body>
		</html>';

	}else{
		//false
		//comprobar si el usuario ha completado el formulario
		if (isset($_POST["nombre1"])) {
			//true el usuario ho completado el formulario y $_post tiene info
			setcookie("nombre", $_POST["nombre"]);
			echo '
		<html>
		<body>
			<h1>Se han establecido las cookies</h1>
			<a href="prueba.php">volver</a>
		</body>
		</html>';

		}else{
			//false hay que volver a mostrar el formulario
			echo '
		<html>
		<body>
			<form action="prueba.php" method="POST">
			<input type="text" name="nombre">
			<input type="submit" value="Enviar"/>
			<
			</form>
			<a href="prueba.php">volver</a>
		</body>
		</html>';
		}

	}

?>