<?php

	function op ($v,&$min){
	
	$n=sizeof($v);
	$min=$v[0];
	

		for ($i=0; $i <$n ; $i++) {

			if ($v[$i] < $min) {
				$min = $v[$i];	
			}

		if ($min < 0) {/*sacamos si es menor que 0 es falso
		 y si es mayor verdadero*/
			return false;
		}else{
			return true;
		}
		
		}
	
	}
	$v = array(2,5,4,6,8,1);
	$min=0;
	$fun=op($v,$min);
	var_dump($fun);
	echo "$min";
	
	
?>