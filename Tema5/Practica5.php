<?php

	$cad1="Futbol";
	$cad2="Futbol";
	$subCadena=strncmp ($cad1, $cad2,3);
	if ($subCadena == 0) {
		echo "Las cadenas son iguales";
	}else{
		echo "Las cadenas no son iguales </br>";
	}

?>