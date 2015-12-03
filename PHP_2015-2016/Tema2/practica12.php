<html>
<head>
	<title>Practica 12</title>
</head>
<body>
	<h2>media por vector numeros</h2>
<p>
	<?php
		
		$media=0;
		$suma=0;
		$vectorNum= array(5,6,20,1);
		
			for ($i=0; $i < 4 ; $i++) { 
				
				$suma = $suma + $vectorNum[$i];
				
			}
			
		$media=$suma/4;
		echo "El valor de la suma es: $media";

?>
</p>
</body>
</html>