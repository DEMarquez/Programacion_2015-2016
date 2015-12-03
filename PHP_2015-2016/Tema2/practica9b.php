<html>
<head>
	<title>Practica 9b</title>
</head>
<body>
	<h2>media por vector</h2>
<p>
	<?php
	
		$vectorSuma = array(1,5,7);
		$suma=0;
		
		echo "La media da: ";

		for ($i=0; $i < 3 ; $i++) { 
			
			$suma=$suma+$vectorSuma[$i]/3;

			echo " $vectorSuma[$i]";
		}
		echo "= $suma";

	?>
</p>
</body>
</html>