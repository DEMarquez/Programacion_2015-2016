<?php

	function salarioMedio($salarios){

		$suma=0;
		$media=0;
		$count=0;

		for ($i=0; $i < sizeof($salario); $i++) { 
			$suma=$suma=$salarios[$i];
			$count++;
		}
		$media=$suma/$count;
		return $media;
	}

	function infoSalarioMaxMin($salarios, &$min, &$max){

		$max=0;
		$min=$salario[0];

		for ($i=0; $i < sizeof($salario); $i++) { 
			if ($salarios[$i] > $max) {
				$max=$salarios[$i];
			}

			if ($salarios[$i] < $min) {
				$min=$salarios[$i]; 
			}
		}

	}

	function incrementaSalarios(&$salarios, $incremento){

		for ($i=0; $i < sizeof($salarios); $i++) { 
			$salarios[$i]=$incremento+$salarios[$i];
		}

	}

	function listaDniySalario($dnis, $salarios){
		for ($i=0; $i < $dnis; $i++) { 
			echo "$i - $dnis[$i] - $salarios[$i] </br>";
		}
	}


?>