<?php
$cadena=str_replace(" ", "",$_GET["frase"]);
$cadenainversa=strrev($cadena);

$res=strcasecmp($cadena, $cadenainversa);
if ($res==0) {
	echo "Las cadenas son iguales";
}else{
	echo "Las cadenas son diferentes";
}
?>