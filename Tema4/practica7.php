<?php

	$familias[0]["Familia"]="Familia";
	$familias[0]["Padre"]="Padre";
	$familias[0]["Madre"]="Madre";
	$familias[0]["Hijo1"]="Hijo1";
	$familias[0]["Hijo2"]="Hijo2";
	$familias[0]["Hijo3"]="Hijo3";
	$familias[0]["Mascota"]="Mascota";

	$familias[1]["Familia"]="Los Simpson";
	$familias[1]["Padre"]="Homer";
	$familias[1]["Madre"]="Marge";
	$familias[1]["Hijo1"]="Bart";
	$familias[1]["Hijo2"]="Lisa";
	$familias[1]["Hijo3"]="Maggie";
	$familias[1]["Mascota"]="Ayudante de Santa Claus";

	$familias[2]["Familia"]="Los Griffin";
	$familias[2]["Padre"]="Peter";
	$familias[2]["Madre"]="Lois";
	$familias[2]["Hijo1"]="Chris";
	$familias[2]["Hijo2"]="Meg";
	$familias[2]["Hijo3"]="Stewie";
	$familias[2]["Mascota"]="Braian";

	foreach ($familias as $indice => $famili) {
		foreach ($famili as $key => $value) {
		echo " - " . $value;
			
		}

		echo " </br>";
	}

?>