<html>
<head>
	<title>Practica 14</title>
</head>
<body>
	<h2>suma de numeros positivos por vector</h2>
<p>
	<?php

	$v= array(7,3,-7,5,-10,12);
	$i=0;
	$suma=0;

	while($v[$i] > 0 ){
	
			$suma = $suma + $v[$i];

		$i++;

	}
	echo "La suma da: $suma";
?>
</p>
</body>
</html>