<html>
	<head><title>Ejemplo de formulario sencillo</title></head>
	<body>
		<?php
			if (empty($_POST)) {
			
				echo '
					<h3>Formulario muy sencillo</h3>
					<form action="practica7.php" method="post">
						Introduzca la cantidad de pesetas: <input type="text" name="pesetas" value="" />
						<input type="submit" value="Enviar" />
						<br>
						Seleccione el tipo de conversion:
						<br>
						Euros <input type="radio" name="moneda" value="1" checked="1"/>
						<br>
						Dolares <input type="radio" name="moneda" value="2" />
					</form>
				';

			}else{
				$euros=166.386;
				$dolares=0.0065550814351824;

				echo "Cantidad " . $_POST["pesetas"] . "<br>";
				echo "Tipo de conversion: " . $_POST["moneda"] . "<br>";

				if ($_POST["moneda"]==1) {
					echo "Son: " . $_POST["pesetas"]/$euros . " euros";
				}else{
					echo "Son: " . $_POST["pesetas"]*$dolares . " dolares";
				}		
			}

		?>
	</body>
</html>