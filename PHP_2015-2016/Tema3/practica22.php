<?php

	include "libreria22.php";

$vSuma = array(1,2,3,4,5,6,7,8,9,10);
$vMedia = array(1,2,3,4,5,6,7,8,9,10);
$vSumaPares = array(1,2,3,4,5,6,7,8,9,10);
$vmediaPares = array(1,2,3,4,5,6,7,8,9,10);
$vMediaImpares = array(1,2,3,4,5,6,7,8,9,10);
$vSumaPosiciones = array(1,2,3,4,5,6,7,8,9,10);
$vContadorMayoresQue = array(1,2,3,4,5,6,7,8,9,10);
$vContadorMenoresQue = array(1,2,3,4,5,6,7,8,9,10);
$vMaximo = array(1,2,3,4,5,6,7,8,9,10);
$vMinimo = array(1,2,3,4,5,6,7,8,9,10);


$fun=suma($vSuma);
echo "la suma da $fun<br>";

$fun=media($vMedia);
echo "la media da $fun<br>";

$fun=sumaPares($vSumaPares);
echo "la suma de los numeros pares da $fun<br>";

$fun=mediaPares($vmediaPares);
echo "la media de los numeros pares da $fun<br>";

$fun=mediaImpares($vMediaImpares);
echo "la media de los numeros impares da $fun<br>";

$indicador=1;
$fun=sumaPosiciones($vSumaPosiciones,$indicador);
	if($indicador==1){
		echo "la suma de las posiciones de los numeros pares da $fun<br>";
	}else{
		echo "la suma de las posiciones de los numeros impares da $fun<br>";
	}

$fun=contadorMayoresQue($vContadorMayoresQue);
echo "hay $fun numeros mayores que 5<br>";

$fun=contadorMenoresQue($vContadorMenoresQue);
echo "hay $fun numeros menores que 5<br>";

$fun=maximo($vMaximo);
echo "el numero mas grande es $fun<br>";

$fun=minimo($vMinimo);
echo "el numero mas pequeño es $fun<br>";

//echo ;
?>