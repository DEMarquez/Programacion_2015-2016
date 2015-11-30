<html>
<head>
	<title>Practica 17</title>
</head>
<body>
	<h2>¿Cual es la salida del programa?</h2>
<p>
	<?php

		$r=2;
		while ($r >=1){
			$c=1;
			while ($c <= 2){
				$comprobacion=$r%2==1?1:2;
				echo "$comprobacion";
				$c++;
			}
			$r=$r-1;
		}

	?>
</p>
</body>
</html>