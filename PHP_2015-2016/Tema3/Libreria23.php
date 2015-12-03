<?php

	include "practica23.php";

$vSuma1 = array(1,2,3,4,5,6,7,8,9,10);
$vSuma2 = array(2,4,6,8,10,12,14,16,18,20);

$vSumaPares = array(1,2,3,4,5,6,7,8,9,10);


$vmediaPares = array(1,2,3,4,5,6,7,8,9,10);

$vMediaImpares = array(1,2,3,4,5,6,7,8,9,10);

$vSumaPosiciones = array(1,2,3,4,5,6,7,8,9,10);
$vSumaPosiciones2 = array(1,2,3,4,5,6,7,8,9,10);

echo "<b>Asi esta el vector antes de la operacion suma<b/><br>";
var_dump($vSuma1);
suma($vSuma1,$vSuma2);
echo "la suma de los dos vectores da<br><br>";
var_dump($vSuma1);
//---------------------------------------------------
echo "<b>Asi esta el vector antes de la operacion sumaPares<b/><br>";
var_dump($vSumaPares);
$numero=5;
sumaPares($vSumaPares,$numero);
echo "la suma de los numeros pares da<br><br>";
var_dump($vSumaPares);
//---------------------------------------------------
mediaPares($vmediaPares,$media);
echo "<b>la media de los numeros pares da $media<b/><br><br>";
//--------------------------------------------------
mediaImpares($vMediaImpares,$media);
echo "<b>la media de los numeros impares da $media<b/><br><br>";
//---------------------------------------------------
echo "<b>Asi esta el vector antes de la operacion sumaPosiciones<b/><br>";
var_dump($vSumaPosiciones);

sumaPosiciones($vSumaPosiciones,$vSumaPosiciones2);
	
		echo "la suma de las posiciones de los numeros
		 pares da:<br>";
		 var_dump($vSumaPosiciones);
	
?>