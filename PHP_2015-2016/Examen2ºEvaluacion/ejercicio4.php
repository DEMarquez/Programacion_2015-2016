<html>
	<body>
		<?php
		if (empty($_POST)) {
		
			echo '
				<form action="ejercicio4.php" method="post">
					Introduzca la secuencia de palabras:<br>
					<textarea name="texto">bla bla bla bla</textarea>
					<br><br>
					Introduce la palabra a buscar: <input type="text" name="buscar"/>
					<br><br>
					<input type="submit" value="Submit"/>
				</form>
			';

			}else{
				
				$cadena=$_POST["texto"];
				$cadena2=$_POST["buscar"];

				$cadenas=substr_count($cadena, $cadena2);
				if (isset($_POST["texto"])) {
				
					echo "La palabra bla se repite: " . substr_count($cadena, $cadena2) . " veces";
				}else{
					echo "no aparece ninguna vez";
				}
		}
		?>
	</body>
</html>		