<?php

	$coche = array(
		array("- Modelo 0","Volvo",22,18),
		array("- Modelo 1","BMW",15,13),
		array("- Modelo 2","Saab",5,2),
		array("- Modelo 3","Land Robert",17,15));

	for ($i=0; $i <sizeof($coche) ; $i++) { 
		for ($j=0; $j <sizeof($coche) ; $j++) { 
			echo $coche[$i][$j]."</br>";
		}
	}
	//var_dump($coche);

?>