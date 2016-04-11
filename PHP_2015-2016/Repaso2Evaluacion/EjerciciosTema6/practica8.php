<html>
	<head><title>Ejemplo de formulario sencillo</title></head>
	<body>
		<?php
			if (empty($_POST)) {
			
				echo '
					<h3>Formulario muy sencillo</h3>
					<form action="practica8.php" method="post">
						Introduzca nombre: <input type="text" name="nombre" value="" />
						<br><br>
						Introduzca edad: <input type="text" name="edad" value="" />
						<br><br>
						Seleccione el tipo de conversion:
						<br>
						No tiene estudios <input type="radio" name="estudios" value="1" checked="1"/>
						<br>
						Estudios primarios <input type="radio" name="estudios" value="2" />
						<br>
						Estudios secundarios <input type="radio" name="estudios" value="3" />
						<br><br>
						<input type="submit" value="Enviar" />
					</form>
				';

			}else{

				echo "Nombre: " . $_POST["nombre"] . "<br>";
				echo "Edad: " . $_POST["edad"] . "<br>";

				if ($_POST["edad"]>=18) {
					echo "mayor de edad";
				}else{
					echo "menor de edad";
				}	

				echo "<br>";

				
				if ($_POST["estudios"]==1) {
					echo "Estudio seleccionado: " . $_POST["estudios"] . " No tiene estudios";
				}elseif($_POST["estudios"]==2){
					echo "Estudio seleccionado: " . $_POST["estudios"] . " Tiene estudios primarios";
				}else{
					echo "Estudio seleccionado: " . $_POST["estudios"] . " Tiene estudios secundarios";
				}
			}

		?>
	</body>
</html>