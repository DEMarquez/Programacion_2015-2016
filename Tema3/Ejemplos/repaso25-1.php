<?php

	include"repaso25.php";

	$dnis = array (13423423, 34134354, 45234523, 23452345);
	$salarios = array (1500,1000,1500,750);
	
	$fun=salarioMedio($salarios);
	echo "El salario medio es: $fun <br>";

	infoSalarioMaxMin($salarios, $min, $max);
	echo "El salario mas grande es: $max <br>";
	echo "El salario mas pequeño es: $min <br>";

	echo "<h1>Aumento de salario en departamento</h1>";
	echo "<b>Salarios antes del incremento<b/>";
	var_dump($salarios);
	$incremento=175;
	incrementaSalarios($salarios, $incremento);
	echo "Salarios despues del incremento";
	var_dump($salarios);
	echo"</br>";

	listaDniySalario($dnis, $salarios);
?>