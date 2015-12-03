<html>
<head>
	<title>Practica 13</title>
</head>
<body>
	<h2>Estructura de control Bucle:</h2>
<p>
	<?php

		$max =0;
		$min=1000;
		$vectorNum= array(7,8,9,1,20);
		
		echo "Los números del vector son: <br/>";
			for ($i=0; $i < 5 ; $i++) { 
				
				echo "$vectorNum[$i] ";


				if ($max < $vectorNum[$i]) {
					$max = $vectorNum[$i];

				}if ($vectorNum[$i] < $min) {
					$min = $vectorNum[$i];
				}
			}
				echo"<br/>";
				echo"El minimo $min <br/>";
				echo"El maximo $max ";

?>
</p>
</body>
</html>