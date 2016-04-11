<html>
	<head><title>Ejemplo de formulario sencillo</title></head>
	<body>
		<?php
		echo '
			<h3>Formulario muy sencillo</h3>
			<form action="practica1.php" method="get">
				Escribe tu nombre: <input type="text" name="nombre" value="" />
			<br>
				Email: <input type="text" name="email" value="" />
			<br/>
				<input type="submit" value="Enviar" />
			</form>
		';

		function recorre($v){

			foreach ($v as $indice => $valor) {
				echo "$indice : $valor <br>";
			}

		}


		echo "Mostrando Get";
			recorre($_GET);

		echo "Mostrando Post";
			recorre($_POST);

		echo "Mostrando Server";
			recorre($_SERVER);

		echo "Mostrando Request";
			recorre($_REQUEST);

		?>
	</body>
</html>