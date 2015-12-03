<?php

	function cilindro($radio,$altura){
		
		$volumen=pi()*$radio*$radio*$altura;
		return $volumen;
	}
	
	$volumen=cilindro (2, 4);
	echo "El volumen del cilindro da: $volumen";
?>