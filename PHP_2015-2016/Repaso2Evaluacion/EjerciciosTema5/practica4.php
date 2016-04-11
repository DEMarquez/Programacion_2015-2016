<?php

	$cadena="Se ha realizado la reserva";
	$cadena2="no";
	if (strstr($cadena,$cadena2)==false) {
		echo "La subcadena no existe";
	}else{
		echo "La subcadena existe";
	}


?>