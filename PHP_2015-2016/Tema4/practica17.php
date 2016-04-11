<?php

	$equiposFultbol = array(array("FC Barcelona","Real Mandril","Valencia","Atletico de Madrit"),array("FC Barcelona B","Real Castilla","Mirandes","Valencia B"));

	foreach ($equiposFultbol as $indice => $equiposFultbol) {
		foreach ($equiposFultbol as $key => $value) {
		echo $indice ." -- " . $value . " </br>";
			
		}
	}

	unset($equiposFultbol["Mirandes"]);

	var_dump($equiposFultbol);

	/*foreach ($equiposFultbol as $indice => $equiposFultbol) {
		foreach ($equiposFultbol as $key => $value) {
		echo $indice ." -- " . $value . " </br>";
			
		}
	}*/
?>