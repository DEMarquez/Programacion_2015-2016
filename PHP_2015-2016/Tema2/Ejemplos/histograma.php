<?php
	
	$h = array(0,0,0,0,0,0,0,0);
	$v = array(1,5,5,4,3,4,5,5,4,1,6,7);

	for ($i=0; $i < sizeof($v); $i++) { 
		$h[$v[$i]]++;
	}

	for ($i=0; $i < sizeof($h)  ; $i++) { 
		echo "$i: ";

		for ($j=0; $j < $h[$i]; $j++) { 
			echo "*";
		}
		echo "</br>";
	}
?>