<?php
	
	$v = array(1,2,4,1,7,2,2);
	$contador=0;

	for($i=0;$i<7;$i++){
		
		if ($v[$i] == 2) {
			$contador++;
			
		}
		
	}
	echo "El número 2 se repite = $contador";
	
?>