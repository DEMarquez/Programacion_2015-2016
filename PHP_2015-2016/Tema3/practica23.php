<?php

	function suma (&$v,$v2) {

		$n=sizeof($v);

		for ($i=0; $i < $n; $i++) {
			$v[$i]=$v[$i]+$v2[$i]; 
			
		}
		
	}

	//otra funcion
	function sumaPares (&$v,$num){

		$n=sizeof($v);

		for ($i=0; $i < $n; $i++) {

			if($v[$i]%2==0){//para sacar numeros pares
				$v[$i]=$num+$v[$i];
			}
		}
		
		
	}

	//otra funcion
	function mediaPares ($v,&$media){

		$n=sizeof($v);
		$suma=0;
		$contador=0;

		for ($i=0; $i < $n; $i++) { 
			if($v[$i]%2==0){//para sacar numeros pares
				$suma=$suma+$v[$i];
				$contador++;

			}
		}
		$media=$suma/$contador;
	}

	//otra funcion
	function mediaImpares ($v,&$media){

		$n=sizeof($v);
		$suma=0;
		$contador=0;
		for ($i=0; $i < $n; $i=$i+2) { 
			
			if($v[$i]%2!=0){//para sacar numeros pares
				$suma=$suma+$v[$i];
				$contador++;
			}

		}
		$media=$suma/$contador;	
	}

	//otra funcion
	function sumaPosiciones (&$v,$v2){

		$n=sizeof($v);
		
			for ($i=0; $i < $n; $i++) { 
				//echo "pares: <br>";
				if($i%2==0){//para sacar numeros pares
					//echo "$i    $v[$i]<br>";
					$v[$i]=$v[$i]+$v2[$i];
				}

			}//cerramos for

		
			
	}

?>