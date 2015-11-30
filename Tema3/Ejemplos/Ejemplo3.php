<?php
	//XREFERENCIA
	function incrementoSalario(&$salario){
		
		$nuevoSalario=$salario+1000;
		return $nuevoSalario;
	}

	$salario=500;
	$nuevoSalario=incrementoSalario($salario);
	echo "$salario <br/>";
	echo "$nuevoSalario <br/>";	
?>