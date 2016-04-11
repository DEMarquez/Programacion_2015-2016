<?php

	$pila = array();
	array_push($pila,"20","15","25","7");

	$compras=67;
	while ($compras > 30) {
		$valor=array_pop($pila);
		$compras=$compras-$valor;
		echo "valor extraido es $valor </br>";


	}
	echo $compras;

?>