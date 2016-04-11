<html>
	<body>
		<h2>Escribe la cantidad de palabras a introducir</h2>
	<form action="prueba3.php" method="POST">
		<input type="text" name="numPalabras">
		<input type="submit" value="GenerarCampos"/>
	</form>
	</body>
</html>

<?php		
		if (!empty($_POST["numPalabras"])) {
			echo '<form action="prueba3.php" method="POST">';
			for ($i=0; $i < $_POST["numPalabras"] ; $i++) { 
				echo '<input type="text" name="' . $i . '">';
				echo "<br>";
			}
			echo '<input type="submit" value="Analizar"/>';
			echo '</form>';
		
		}

		if (!empty($_POST["0"])) {
			$max=strlen($_POST["0"]);
			$cadena=$_POST["0"];
			for ($i=0; $i < sizeof($_POST); $i++) { 
				if (strlen($_POST[$i]) > $max) {
					$max=strlen($_POST[$i]);
					$cadena=$_POST[$i];
				}
			}
				echo "La cadena mas grande es: " . $cadena;
		}



?>