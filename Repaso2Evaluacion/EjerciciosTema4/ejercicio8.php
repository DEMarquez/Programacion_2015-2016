<?php

	$amigos[0]["Ciudad"]="Ciudad";
	$amigos[0]["Nombre"]="Nombre";
	$amigos[0]["Edad"]="Edad";
	$amigos[0]["Telefono"]="Telefono";

	$amigos[1]["Ciudad"]="Madrid";
	$amigos[1]["Nombre"]="Pedro";
	$amigos[1]["Edad"]="32";
	$amigos[1]["Telefono"]="919999999";

	$amigos[2]["Ciudad"]="Barcelona";
	$amigos[2]["Nombre"]="Susana";
	$amigos[2]["Edad"]="34";
	$amigos[2]["Telefono"]="930000000";

	$amigos[3]["Ciudad"]="Toledo";
	$amigos[3]["Nombre"]="Sonia";
	$amigos[3]["Edad"]="42";
	$amigos[3]["Telefono"]="925090909";
	
	
	foreach ($amigos as $indice => $amigo) {
		foreach ($amigo as $key => $value) {
		echo " - " . $value;
			
		}

		echo " </br>";
	}

?>