<?php

	$cadena="/var/dir/pruebas";
	$cadena2="\$HOME/";
	$inicio=9;
	$tamayo=0;

	$res=substr_replace($cadena, $cadena2, $inicio,$tamayo);
	echo "$res";
	
?>