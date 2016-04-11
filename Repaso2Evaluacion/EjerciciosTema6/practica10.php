<html>
	<head><title>Ejemplo de formulario sencillo</title></head>
	<body>
		<?php
			if (empty($_GET)) {
			
				echo '
					<h3>Formulario muy sencillo</h3>
					<form action="practica10.php" method="get">
						Introduzca su nombre: <input type="text" name="nombre" value="" />
						<br><br>
						Seleccione el ingreso a realizar:
						<br>
						<select name ="ingresos" id="Ingresos">
							<option value="1-1000">1-1000</option>
							<option value="1001-3000">1001-3000</option>
							<option value="+3000">+3000</option>
						</select>
						<br><br>
						<input type="submit" value="Enviar" />
					</form>
				';

			}else{

				echo "Nombre: " . $_GET["nombre"] . "<br>";
				echo "<br>";

				if($_GET["ingresos"]=="+3000"){
					echo "Se tiene que pagar un inpuesto por ingresar: " . $_GET["ingresos"];
				}else{
					echo "El ingreso a sido de: " . $_GET["ingresos"];
				}

			}

		?>
	</body>
</html>