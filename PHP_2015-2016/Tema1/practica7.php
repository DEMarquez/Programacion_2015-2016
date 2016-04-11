<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>
<title>Practica 7</title>
</head>
<body>
<h2>Trabajando con cadenas</h2>
	<?php
		$numero=19;
		$cadena1= "21";
		$cadena2= "23abc";
		$cadena3= "2211.5";
		$suma=$numero+$cadena1;

		echo "El resultado de sumar $numero y '$cadena1' es: $suma <br>";
		$suma=$numero+$cadena2;
		echo "El resultado de sumar $numero y '$cadena2' es: $suma <br>";
		$suma=$numero+$cadena3;
		echo "El resultado de sumar $numero y '$cadena3' es: $suma <br>";
		$suma=$cadena1+$cadena2;
		echo "El resultado de sumar '$cadena1' y '$cadena2' es: $suma <br>";
		$suma=$cadena1+$cadena3;
		echo "El resultado de sumar '$cadena1' y '$cadena3' es: $suma <br>";
	//hace los sumatorios y deja pasar las letras con lo cual los
	//numeros se suman y las letras desaparecen 
	?>
</body>
</html>