<?php

	function minimo($v,&$min){

		$min=$v[0];

		for ($i=0; $i <sizeof($v) ; $i++) { 
			if ($v[$i] < $min) {
				$min=$v[$i];
			}

			if ($min < 0) {
				return false;
			}else{
				return true;
			}
		}
		
	}

	$v = array(10,3,3,3,1);
	$min=0;
	$fun=minimo($v,$min);
	var_dump($fun);
	echo "$min";

?>