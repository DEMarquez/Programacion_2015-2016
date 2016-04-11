<html>
	<head><title>Ejemplo de formulario sencillo</title></head>
	<body>
		<?php
		echo '
			<h3>Formulario muy sencillo</h3>
			<form action="practica2.php" method="get">
				Escribe tu nombre: <input type="text" name="nombre" value="" />
			<br>
				Email: <input type="text" name="email" value="" />
			<br/>
				<input type="submit" value="Enviar" />
			</form>
		';

		function recorre($v){

			foreach ($v as $indice => $valor) {
				echo "$indice : $valor";
			}
		}

			if (empty($_GET)) {
				
				echo"Estamos recorriendo el metodo post <br>";
					recorre($_POST);

			}else{

				echo"Estamos recorriendo el metodo get <br>";
					recorre($_GET);

			}

		

		?>
	</body>
</html>