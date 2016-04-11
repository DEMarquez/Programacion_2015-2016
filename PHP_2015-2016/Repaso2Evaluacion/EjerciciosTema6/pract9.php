<html>
	<body>

		<?php
			if (empty($_POST)) {
					
				echo'
					<form action="pract9.php" method="post">
						Intoduzca el nombre: <input type="text" name="nombre"/><br><br>
						Selecciona deportes: <br>
						<input type="checkbox" name="deportes[]" value="futbol" /> futbol <br>
						<input type="checkbox" name="deportes[]" value="basket" /> basket <br>
						<input type="checkbox" name="deportes[]" value="tennis" /> tennis <br>
						<input type="checkbox" name="deportes[]" value="voley" /> voley <br><br>
						<input type="submit" value="enviar"  />
					</form>
				';
	
			}else{

				echo "El nombre del usuario es: " . $_POST["nombre"] . "<br>";

				echo "El usuario practica: <br>";
				$deportes=$_POST["deportes"];
				foreach ($deportes as $indice => $valor) {
					echo "* : $valor <br>";
				}
				echo "El usuario practica " . sizeof($deportes) . " deportes";

			}

		?>

	<body>
<html>	