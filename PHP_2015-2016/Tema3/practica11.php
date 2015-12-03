<?php
	$pi = 3.14;
	function valor_pi() {
		if (!isset ($pi)) {//si es true sera false
			//si $pi es false sera true
			$pi = pi () ;
		}
	return $pi;
	}
	echo valor_pi();
?>