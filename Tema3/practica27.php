<?php
	function sumatorio($N){
	$suma=0;

		for ($i=0; $i <=$N ; $i++) { 
			$suma=$suma+1/pow(2,$i);
		}
		return $suma;
	}		
	sumatorio(10);

?>