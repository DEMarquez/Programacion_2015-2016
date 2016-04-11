<?php

	$ciudades = array("C1"=>"Valencia","C2"=>"Alicante","C3"=>"Castello");

	/*for ($i=0; $i < sizeof($ciudades); $i++) { 
		echo $cuidades[$i]."</br>";
	}
*/
	foreach ($ciudades as $indice => $ciudad) {
		echo $indice."-";
		echo  $ciudad."</br>";

	}
?>