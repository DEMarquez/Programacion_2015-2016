<?php
	//XREFERENCIA
	function incrementoSalario(&$salario){
		
		$salario=$salario+1000;

	}

	$salarioInicial=500;
	$salarioFinal=500;
	incrementoSalario($salarioFinal);
	echo "$salarioInicial <br/>";
	echo "$salarioFinal <br/>";	
?>