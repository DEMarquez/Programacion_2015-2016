<html>
<head>
	<title>Practica 23</title>
</head>
<body>
	<h2>¿Qué mostrará por pantalla el siguiente código?</h2>
<p>
	<?php

		$var =1;
		$m=1;
		$x=true;
		do {
			if (!$x){
			$var=2;
			}

			do {
			$m++;

			}while ($m < 3);
			$x=false;

		}while ($var != 2);
		echo $m;

	?>
</p>
</body>
</html>