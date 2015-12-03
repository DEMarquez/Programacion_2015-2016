<?php

	function suma($v){

		$suma=0;

		for ($i=0; $i < sizeof($v); $i++) { 
			$suma=$suma+$v[$i];
		}
		return $suma;
	}

	function media($v){

		$suma=0;
		$media=0;

		for ($i=0; $i < sizeof($v); $i++) { 
			$suma=$suma+$v[$i];
		}
		$media=$suma/$i;
		return $media;
	}

function sumaPares($v){

		$suma=0;

		for ($i=0; $i < sizeof($v); $i++) { 
			if ($v[$i]%2==0) {
				$suma=$suma+$v[$i];
			}	
		}
		return $suma;
	}

	function mediaPares($v){

		$suma=0;
		$media=0;
		$count=0;

		for ($i=0; $i < sizeof($v); $i++) { 
			if ($v[$i]%2==0) {
				$suma=$suma+$v[$i];
				$count++;
			}
			
		}
		$media=$suma/$count;
		return $media;
	}


	function mediaImpares($v){

		$suma=0;
		$media=0;
		$count=0;

		for ($i=0; $i < sizeof($v); $i++) { 
			if ($v[$i]%2!=0) {
				$suma=$suma+$v[$i];
				$count++;
			}
			
		}
		$media=$suma/$count;
		return $media;
	}

	function sumaPosiciones($v,$indicador){

		$suma=0;

		if ($indicador == 1) {
			for ($i=0; $i < sizeof($v); $i++) { 
				if ($v[$i]%2==0) {
					$suma=$suma+$v[$i];
				}
			}
		}else{
			for ($i=0; $i < sizeof($v); $i++) { 
				if ($v[$i]%2!=0) {
					$suma=$suma+$v[$i];
				}
			}
		}
		return $suma;
	}

	function contadorMayorQue($v,$valor){

		$count=0;

		for ($i=0; $i < sizeof($v); $i++) { 
			if ($v[$i]>$valor) {
				$count++;
			}
		}
		return $count;
	}

	function contadorMenorQue($v,$valor){

		$count=0;

		for ($i=0; $i < sizeof($v); $i++) { 
			if ($v[$i]<$valor) {
				$count++;
			}
		}
		return $count;
	}		

	function maximo($v){

		$max=0;

		for ($i=0; $i < sizeof($v); $i++) { 
			if ($v[$i]>$max) {
				$max=$v[$i];
			}
		}
		return $max;
	}


	function minimo($v){

		$min=$v[0];

		for ($i=0; $i < sizeof($v); $i++) { 
			if ($v[$i]<$min) {
				$min=$v[$i];
			}
		}
		return $min;
	}		
?>