<?php
	//XVALOR
	function incrementoSalario($salario){
		$salario=$salario+1000;
		return $salario;
	}
	$salario=500;
	$nuevoSalario=incrementoSalario($salario);
	echo "$salario <br/>";
	echo "$nuevoSalario <br/>";
?>