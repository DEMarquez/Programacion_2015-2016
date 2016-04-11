<?php

	$cadena=" \" \ 1 + 2 / 3 * 2 : 2-3 / 4 * 3";
	$patron="1 2 3 2 2 3 4 3";
	
	
	$res=str_replace($cadena, $patron, $cadena);
	echo "$res";


?>