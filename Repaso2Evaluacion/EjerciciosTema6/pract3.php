<html>
	<body>
		
		<?php

				
				echo '
					<h2>Formulario Palabras palindromas</h2>
					<form action="pract3.php" method="post">
						<label>Escribe la palabra o frase que quieres comprobar si es palindromo:</label>
						<br>
						<textarea name="frase" cols="40" rows="5"></textarea>
						<br><br>
						<input type="submit" value="Comprobar"/>
					</form>
				';


				$cadena=str_replace(" ", "", $_POST["frase"]);
				$cadenaInversa=strrev($cadena);

				$res=strcasecmp($cadena, $cadenaInversa);

				if ($res==0) {
					echo "La frase es un palindromo";
				}else{
					echo "La frase no es un palindromo";
				}

			

		?>

	</body>
</html>