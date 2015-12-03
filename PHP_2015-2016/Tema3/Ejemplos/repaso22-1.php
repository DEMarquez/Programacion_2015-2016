<?php
	
	include "repaso22.php";

	$v = array(7,5,9,7,2,4,5,6,5,4,8,3,1,5);


	$fun=suma($v);
	echo"La suma del vector da: $fun <br>";

	$fun=media($v);
	echo"La media del vector da: $fun <br>";

	$fun=sumaPares($v);
	echo"La suma de los pares numeros pares del vector da: $fun <br>";

	$fun=mediaPares($v);
	echo"La media de los pares numeros pares del  del vector da: $fun <br>";

	$fun=mediaImpares($v);
	echo"La media de los pares numeros impares del  del vector da: $fun <br>";

	$indicador=1;
	$fun=sumaPosiciones($v,$indicador);
	if ($indicador==1) {
		echo "La suma de las posiciones pares da: $fun <br>";
	}else{
		echo "La suma de las posiciones impares da: $fun <br>";
	}

	$valor=3;
	$fun=contadorMayorQue($v,$valor);
	echo "Hay $fun numeros mayores que $valor <br>";

	$valor=3;
	$fun=contadorMenorQue($v,$valor);
	echo "Hay $fun numeros mayores que $valor <br>";

	$fun=maximo($v);
	echo "El numero mas grande es: $fun <br>";

	$fun=minimo($v);
	echo "El numero mas pequeño es: $fun ";
?>