<html>
<head>
	<title>Practica 11</title>
</head>
<body>
	<h2>media por vector numeros pares</h2>
<p>
	<?php

		$suma=0;
		$media=0;
		$cont=0;
		$vectorNum= array(5,6,20,1);
		
			for ($i=0; $i < 4 ; $i++) { 
				if($vectorNum[$i]%2==0){
				$suma = $suma + $vectorNum[$i];
				$cont++;
				}
			}
			$media=$suma/$cont;
		echo "El valor de la suma es: $media";

?>
</p>
</body>
</html>