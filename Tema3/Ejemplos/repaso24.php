<?php

	function suma(){

		$v=func_get_args();
		$suma=0;

		for ($i=0; $i <sizeof($v) ; $i++) { 
			$suma=$suma+$v[$i];
		}
		return $suma;
	}
	
	function media(){

		$v=func_get_args();
		$suma=0;
		$media=0;
		$count=0;

		for ($i=0; $i <sizeof($v) ; $i++) { 
			$suma=$suma+$v[$i];
			$count++;
		}
		$media=$suma/$count;
		return $media;
	}

	function sumaPares($v){

		$v=func_get_args();
		$suma=0;

		for ($i=0; $i <sizeof($v) ; $i++) { 
			if ($v[$i]%2==0) {
				$suma=$suma+$v[$i];
			}	
		}
		return $suma;
	}

?>