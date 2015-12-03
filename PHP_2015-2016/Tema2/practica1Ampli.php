<html>
<head>
	<title>Ejercicio 1 Ampliado</title>
</head>
<body>
	<h2>impares 20 al 40</h2>
<p>
	<?php

		
		foreach (range(20, 40) as $i) {
				
			if ($i % 2 == 1){

				echo " $i";

			}

		}

	?>
</p>
</body>
</html>