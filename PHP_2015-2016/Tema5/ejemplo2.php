<?php

	$cadena ="daniel.espimarqez06@gmail.com";
	$car1="m";
	$subCadena=stristr($cadena, $car1);
	if ($subCadena== "") {
		echo "La subcadena no existe";
	}else{
		echo "La subcadena existe </br>";
		echo "La subcadena: $subCadena";
	}

?>