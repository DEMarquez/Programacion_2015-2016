<?php

	$cadena=" 2,543.12";
	$patron="2543.12";
	
	
	$res=str_replace($cadena, $patron, $cadena);
	echo "$res";


?>