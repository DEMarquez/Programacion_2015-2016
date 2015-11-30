<?php

function salarioMedio($salarios){
	$suma=0;
	$media=0;
	for ($i=0; $i <sizeof($salarios) ; $i++) { 
		$suma=$suma+$salarios[$i];
	}
	$media=$suma/$i;
	return $media;
}

function infoSalarioMaxMin($salarios, &$min, &$max){

	$max=0;
	$min=$salarios[0];

	for ($i=0; $i < sizeof($salarios) ; $i++) { 
		if ($salarios[$i] > $max) {
			$max = $salarios[$i];
		}
		if ($salarios[$i] < $min) {
			$min = $salarios[$i];
		}
	}

	//$maximo=$max
	//$minimo=$min
}

function incrementaSalarios(&$salarios, $incremento){

	for ($i=0; $i <sizeof($salarios) ; $i++) { 
		$salarios[$i]=$incremento+$salarios[$i];
	}

}

function listaDniySalario($dnis, $salarios){
	echo "Listado DNIs y Salarios </br>";
	for ($i=0; $i <sizeof($dnis) ; $i++) { 
		echo "$i - $dnis[$i] -  $salarios[$i] </br>";
	}
}

?>