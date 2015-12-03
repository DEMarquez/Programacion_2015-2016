<?php

$diastotales=0;
$suma=0;

//Se cambian estas variables dependiendo de cada situacion.
$dia=24;
$mes=10;
$esBisiesto=true;


switch ($mes) {
	case 1:
	 	$suma = $suma + 31;
	case 2:
		$suma = $suma + 28;
	case 3:
		$suma = $suma + 31;
	case 4:
		$suma = $suma + 30;
	case 5:
		$suma = $suma + 31;
	case 6:
		$suma = $suma + 30;
	case 7:
		$suma = $suma + 31;
	case 8:
		$suma = $suma + 31;
	case 9:
		$suma = $suma + 30;
	case 10:
		$suma = $suma + 31;
	case 11:
		$suma = $suma + 30;
	case 12:
		$suma = $suma + 31;
	break;
}
	if ($esBisiesto == true) {
		$diastotales=$suma - $dia+1;
	}else {
		$diastotales=$suma - $dia;
	}
	
	//echo "$suma <br>";
	echo "Falten $diastotales dies per acabar l'any";
?>