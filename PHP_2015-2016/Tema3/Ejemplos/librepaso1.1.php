<?php

	include "librepaso.php";

	$dnis = array (13423423, 34134354, 45234523, 23452345);
	$salarios = array (1500,1000,1500,750);

	$fun=salarioMedio($salarios);
	echo "El salario medio de los trabajadores es: $fun </br>";

	infoSalarioMaxMin($salarios, $min, $max);
	echo "Salario mas grande: $max </br>";
	echo "Salario mas pequeño: $min </br>";


	echo "<h1>Aumento de salario en departamento</h1>";
	echo "<b>Salarios antes del incremento<b/>";
	var_dump($salarios);
	$incremento=250;
	incrementaSalarios($salarios,$incremento);
	echo "Salarios despues del incremento";
	var_dump($salarios);
	echo"</br>";
//--------------------------------------------------------

	listaDniySalario($dnis, $salarios);