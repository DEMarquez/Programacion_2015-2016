<?php

	function suma ($v) {

		$n=sizeof($v);
		$suma=0;

		for ($i=0; $i < $n; $i++) { 
			$suma=$suma+$v[$i];
		}

		return $suma;
	}

	//otra funcion
	function media ($v){

		$n=sizeof($v);
		$suma=0;
		$media=0;
		for ($i=0; $i < $n; $i++) { 
			$suma=$suma+$v[$i];
		}
		$media=$suma/$i;
		return $media;	
	}

	//otra funcion
	function sumaPares ($v){

		$n=sizeof($v);
		$suma=0;
		for ($i=0; $i < $n; $i++) {

			if($v[$i]%2==0){//para sacar numeros pares
				$suma=$suma+$v[$i];
			}
		}
		return $suma;	
	}

	//otra funcion
	function mediaPares ($v){

		$n=sizeof($v);
		$suma=0;
		$contador=0;
		for ($i=0; $i < $n; $i++) { 
			
			if($v[$i]%2==0){//para sacar numeros pares
				$contador++;
				$suma=$suma+$v[$i];
			}
		}
		$media=$suma/$contador;
		return $contador;	
	}

	//otra funcion
	function mediaImpares ($v){

		$n=sizeof($v);
		$suma=0;
		$contador=0;

		for ($i=0; $i < $n; $i=$i+2) { 
			
			if($v[$i]%2!=0){//para sacar numeros pares
				$contador++;
				$suma=$suma+$v[$i];
			}

		}
		$media=$suma/$contador;
		return $contador;	
	}

	//otra funcion
	function sumaPosiciones ($v,$indicador){

		$n=sizeof($v);
		$suma=0;
		if($indicador==1){
			for ($i=0; $i < $n; $i++) { 
				//echo "pares: <br>";
				if($i%2==0){//para sacar numeros pares
					//echo "$i    $v[$i]<br>";
					$suma=$suma+$v[$i];
				}

			}//cerramos for

		}else{
			for ($i=0; $i < $n; $i++) {
				//echo "impares: <br>";
				if($i%2!=0){
					//echo "$i    $v[$i]<br>";
					$suma=$suma+$v[$i];
				}
			}//cerramos for
		}
		
		return $suma;	
	}

	//otra funcion
	function contadorMayoresQue($v){

		$n=sizeof($v);
		$num=5;
		$contador=0;
		for ($i=0; $i < $n; $i++) { 
			
			if($v[$i] > $num){
				//$num=$v[$i];
				$contador++;
			}
		}
		return $contador;	
	}

	//otra funcion
	function contadorMenoresQue($v){

		$n=sizeof($v);
		$num=5;
		$contador=0;
		for ($i=0; $i < $n; $i++) { 
			
			if($v[$i] < $num){
				//$num=$v[$i];
				$contador++;
			}
		}
		return $contador;	
	}
	
	//otra funcion
	function maximo ($v){

		$n=sizeof($v);
		$max=0;
		for ($i=0; $i < $n; $i++) { 
			
			if($v[$i] > $max){
				$max=$v[$i];
			}
		}
		return $max;	
	}

	//otra funcion
	function minimo ($v){

		$n=sizeof($v);
		$min=$v[0];
		for ($i=0; $i < $n; $i++) { 
			
			if($v[$i] < $min){
				$min=$v[$i];
			}
		}
		return $min;	
	}
	
?>