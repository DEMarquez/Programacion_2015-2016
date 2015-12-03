<?php

	$pi = 3.14;
	function valor_pi() {
		global $pi;/*Si declaramos una variable local con
		 el mismo nombre que una variable global,
		  dentro de la función trabajaremos con la
		   versión local de la variable.*/

		if (!isset ($pi)) {
			$pi = pi () ;
		}
	return $pi;

	}

	echo valor_pi();
?>