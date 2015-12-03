<html>
<head>
	<title>Practica 9</title>
</head>
<body>
	<h2>Suma por bucle</h2>
<p>
	<?php
	
		$suma=1;
		
		echo "La suma de los 10 prieros números enteros es :";
		echo "$suma";
		for ($i=2; $i <= 10 ; $i++) { 
			
			
			
			$suma=$suma+$i;

			echo " + $i";
			
		}
		echo "= $suma";

	?>
</p>
</body>
</html>