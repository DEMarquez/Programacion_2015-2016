<html>
<head>
	<title>Practica 14</title>
</head>
<body>
	<h2>Suma de numeros positivos</h2>
<p>
	<?php

		$suma=0;
		$vectorNum= array(5,6,20,-7);
		
			for ($i=0; $i < 4 ; $i=$i+2) { 
				
				$suma = $suma + $vectorNum[$i]/2;

			}
		echo "El valor de la suma es: $suma";

?>
</p>
</body>
</html>