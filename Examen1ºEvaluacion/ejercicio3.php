<?php

function operaciones($num1,$num2,$cadena){

	$op=0;
	

	switch ($cadena) {
		case "+":
			$op=$num1+$num2;
			echo "la suma da: $op";
			break;
		case "-":
			$op=$num1-$num2;
			echo "la resta da: $op";
			break;
		case "*":
			$op=$num1*$num2;
			echo "la multiplicacion da: $op";
			break;			
		
	}
	return $op;
}
	operaciones(8,2,"+")
	
?>