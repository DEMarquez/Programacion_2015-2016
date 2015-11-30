<?php

function incrementoSalario(&$salario,$incremento){

	for ($i=0; $i <sizeof($salario) ; $i++) { 
		if ($salario[$i] < 600) {
			$salario[$i]=$incremento+$salario[$i];
		}
	}
}

$salario = array(1000,500,1500,400,550,1200);

echo "Salario antes de la modificacion";	
var_dump($salario);
$incremento=300;
incrementoSalario($salario,$incremento);
echo "Salario despues de la modificacion";
var_dump($salario);
echo "</br>";

?>