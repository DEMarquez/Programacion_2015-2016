<html>
<head>
	<title>Practica 18</title>
</head>
<body>
	<h2>¿Cual es la salida del programa?</h2>
<p>
	<?php

		$sigue = true;

		while ( $sigue ) {
			$x =(int)pow (2,2); //pow(m,n) es m elevado a n

			switch ( $x ) {
				case 4:
					$y =2;
				case 6:
					$y =4;
					break ;
				case 8:
					$y =8;
					break ;
				default :
					$y =0;
			}

			echo $y;
			$sigue = false ;
		}

	?>
</p>
</body>
</html>