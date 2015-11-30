<?php
	
	$v = array(2,3,4,6,2,8,1);
	$max=0;

	for($i=0;$i<7;$i++){
		
		if ($v[$i] %2 == 0) {
			//echo "";
			}if ($v[$i] > $max) {
				$max=$v[$i];
			
		}
		
	}
	echo "El mayor es $max";
	
?>