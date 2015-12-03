<html>
<head>
	<title>Practica 28</title>
</head>
<body>
	<h2>comprobamos cuantos numeros hay</h2>
<p>
	<?php

		$num=17848600;//8 cifras
		$cifras=7;//num/10 --> (int)$num/10
		$contador=0;

		while($num > 0){

			$num=(int)($num/10);//1784860,0
			$num=(int)$num;//1784860
			$contador++;
			
		}

		if($cifras != $contador){
			echo "El numero es incorrecto";
		}else{
			echo "El numero es correcto";
		}

	?>
</p>
</body>
</html>