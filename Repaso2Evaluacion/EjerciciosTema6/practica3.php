<html>
	<body>
			<?php
			
				echo"<h1>Formulario palabras palindromo</h1>";
				echo "Escribe la palabra o frase que quieres comprobar si és palíndromo";
				
				echo '<form action="practica3.php" method="post">
					<textarea name="frase" cols="40" rows="5"></textarea>
					<br>
					<input type="Submit" value="Comprobar"/>
					</form>';

				$cadena=str_replace(" ", "", $_POST["frase"]);
				$cadenaInversa=strrev($cadena);

				$res=strcasecmp($cadena, $cadenaInversa);

				if ($res==0) {
					echo"Las cadenas son iguales";
				}else{
					echo"Las cadenas son distintas";
				}
	
			?>
	</body>
</html>
