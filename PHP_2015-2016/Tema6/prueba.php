<?php
	//var_dump($_COOKIE);
	if (isset($_COOKIE["nombre3"])) {
		//true las cookies nombre existe
		echo '
		<html>
		<body>
			<h1>Bienvenido " . $_COOKIE["nombre3"] . "</h1>
		</body>
		</html>';

	}else{
		//false
		//comprobar si el usuario ha completado el formulario
		if (isset($_POST["nombre2"])) {
			//true el usuario ho completado el formulario y $_post tiene info
			setcookie("nombre3", $_POST["nombre2"]);
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