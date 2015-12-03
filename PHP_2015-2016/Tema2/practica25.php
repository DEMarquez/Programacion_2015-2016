<html>
<head>
	<title>Practica 25</title>
</head>
<body>
	<h2>Estructura de control bucle:</h2>
<p>
	<?php

		
		$num = 123768;
		$posicion = 2;
		$i=0;
	echo "El numero es: $num <br/>";
	echo "Buscamos la posicion $posicion <br/>";
		while ($i < $posicion) {
			
			$num=(int)$num/10;
			$i++;

		}
		//$num=275
		$d=$num%10;

		echo "La cifra es $d";

	?>
</p>
</body>
</html>