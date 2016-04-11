<?php

	$frase="Isaac no  ronca asi";

	$cadena=str_replace(" ", "", $frase);
	$cadenaInversa=strrev($cadena);

	$res=strcasecmp($cadena, $cadenaInversa);

	if($res==0){
		echo "Las cadena es cap y cua";
	}else{
		echo "Las cadena no es cap y cua";
	}

?>