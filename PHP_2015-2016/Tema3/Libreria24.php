<?php

	function suma () {

		$v=func_get_args();
		$n=sizeof($v);
		$suma=0;

		for ($i=0; $i < $n; $i++) { 
			$suma=$suma+$v[$i];
		}

		return $suma;
	}

	//otra funcion
	function media (){

		
		$v=func_get_args();
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
		
		$v=func_get_args();
		$n=sizeof($v);
		$suma=0;
		for ($i=0; $i < $n; $i++) {

			if($v[$i]%2==0){//para sacar numeros pares
				$suma=$suma+$v[$i];
			}
		}
		return $suma;	
	}

?>