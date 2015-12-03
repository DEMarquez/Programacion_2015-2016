<?php

	function salarioMedio($salarios){

		$n=sizeof($salarios);
		$suma=0;
		$media=0;
		for ($i=0; $i < $n; $i++) { 
			$suma=$suma+$salarios[$i];
		}
		$media=$suma/$i;
		return $media;	
	}
	
	function infoSalarioMaxMin($salarios, &$min, &$max){

		$n=sizeof($salarios);
		$maximo=0;
		$minimo=$salarios[0];
		for ($i=0; $i < $n; $i++) { 
			
			if($salarios[$i] > $maximo){
				$maximo=$salarios[$i];
			}
			if($salarios[$i] < $minimo){
				$minimo=$salarios[$i];
			}
		}

		$max=$maximo;
		$min=$minimo;
		
	}

	function incrementaSalarios(&$salarios, $incremento){

		$n=sizeof($salarios);

		for ($i=0; $i < $n; $i++) {

			$salarios[$i]=$incremento+$salarios[$i];
			
		}

	}

	function listaDniySalario($dnis, $salarios){


		//$n=sizeof($dnis);
		
		for ($i=0; $i < sizeof($dnis); $i++) {
			echo"$i - $dnis[$i] - $salarios[$i] <br/>";
		}
		
	}

?>	