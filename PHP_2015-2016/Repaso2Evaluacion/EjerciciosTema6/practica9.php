<html>
	<head><title>Ejemplo de formulario sencillo</title></head>
	<body>
		<?php
			if (empty($_GET)) {
			
				echo '
					<h3>Formulario muy sencillo</h3>
					<form action="practica9.php" method="get">
						Introduzca su nombre: <input type="text" name="nombre" value="" />
						<br><br>
						Seleccione los deportes que practique:
						<br>
						<input type="checkbox" name="deporte[]" value="Futbol">Futbol<br>
						<input type="checkbox" name="deporte[]" value="Basket">Basket<br>
						<input type="checkbox" name="deporte[]" value="Tennis">Tennis<br>
						<input type="checkbox" name="deporte[]" value="Voley">Voley<br><br>
						<br><br>
						<input type="submit" value="Enviar" />
					</form>
				';

			}else{

				echo "Nombre: " . $_GET["nombre"] . "<br>";
				echo "<br>";

				echo "Deportes seleccionados <br>";
				echo "<br>";

				$deportes=$_GET["deporte"];
				foreach ($deportes as $indice => $valor) {
					echo "<b>*</b> $valor <br>";
				}
				echo "<br>";

				echo "As elegido: " . sizeof($deportes) . " deportes";

			}

		?>
	</body>
</html>