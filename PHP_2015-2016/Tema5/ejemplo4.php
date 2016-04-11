<?php

	$cadena ="El rápido zorro marrón salta sobre el perro perezoso";
	$car1="salta";
	
	if (strstr($cadena, $car1)== "") {
		echo "La subcadena no existe";
	}else{
		echo "La subcadena existe";
	}

?>