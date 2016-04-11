<?php

	function familia($familias){
		foreach ($familias as $key => $familia) {
			foreach ($familia as $key => $value) {
				echo " - " . $value;
			}
			echo "<br>";
		}
	}
	
	$familias [0]["Familia"]="Familia";
	$familias [0]["Padre"]="Padre";
	$familias [0]["Madre"]="Madre";
	$familias [0]["Hijo1"]="Hijo1";
	$familias [0]["Hijo2"]="Hijo2";
	$familias [0]["Hijo3"]="Hijo3";

	$familias [1]["Familia"]="Los simpson";
	$familias [1]["Padre"]="Homer";
	$familias [1]["Madre"]="Marge";
	$familias [1]["Hijo1"]="Bart";
	$familias [1]["Hijo2"]="Lisa";
	$familias [1]["Hijo3"]="Maggie";

	$familias [2]["Familia"]="Los Griffin";
	$familias [2]["Padre"]="Peter";
	$familias [2]["Madre"]="Lois";
	$familias [2]["Hijo1"]="Chris";
	$familias [2]["Hijo2"]="Meg";
	$familias [2]["Hijo3"]="Stewie";


familia($familias);
	

?>