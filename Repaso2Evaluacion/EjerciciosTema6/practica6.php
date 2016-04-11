<html>
	<head><title>Ejemplo de formulario sencillo</title></head>
	<body>
		<?php
			if (empty($_POST)) {
			
		
				echo '
					<h3>Formulario muy sencillo</h3>
					<form action="practica6.php" method="post">
						Introduzca la cantidad de euros: <input type="text" name="euros" value="" />
						<input type="submit" value="Enviar" />
					</form>
				';

		}else{
				$pesetas=166.386;
				
				echo "Son: " . $_POST["euros"]*$pesetas . " pesetas";
				
					
		}

		?>
	</body>
</html>