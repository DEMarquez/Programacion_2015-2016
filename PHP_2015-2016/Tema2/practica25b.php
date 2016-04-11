<html>
<head>
	<title>practica 25b</title>
</head>
<body>
	<h2>Piramide invertida</h2>
<p>
	<?php

		
		$num = 27345;
		$cifra = 7;
		$i=0;
	/*echo "El numero es: $num <br/>";
	echo "Buscamos la posicion $posicion <br/>";*/
		while ($i < $cifra) {
			
			$num=(int)$num/10;
			$i++;

		}
		

		echo "La cifra es $i";

	?>
</p>
</body>
</html>