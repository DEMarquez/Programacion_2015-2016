<html>
	<head><title>Ejemplo de formulario sencillo</title></head>
	<body>
		<?php
			if (empty($_POST)) {
			
		
				echo '
					<h3>Formulario muy sencillo</h3>
					<form action="practica5.php" method="post">
						Escribe tu nombre: <input type="text" name="nombre" value="" />
					<br>
						Email: <input type="text" name="email" value="" />
					<br/>
						<input type="submit" value="Enviar" />
					</form>
				';

		}else{

				echo "Mostrando informacion almacenada en  $Post <br>";
				echo "nombre: " . $_POST["nombre"] . "<br>";
				echo "Email: " . $_POST["email"] . "<br>";
					
		}

		?>
	</body>
</html>