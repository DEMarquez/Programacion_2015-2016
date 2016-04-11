<?php
	
	function elevado(&$numero,&$indice){
		echo "Dentro de la funcion elevado <br/>";
		$resultado=$numero;
		for ($i=$indice; $i > 1; $i--) { 
			$resultado=$resultado*$numero;

		}
			
		$numero=$resultado;
		echo "La variable numero vale: $numero <br/>";
		echo "Fin de la funcion elevado <br/>";
	return $resultado;
	}

	$numero=2;
	$indice=3;
	echo "La variable numero vale: $numero <br/>";
	$resultado = elevado($numero,$indice);
	echo "La variable numero vale: $numero <br/>";
?>