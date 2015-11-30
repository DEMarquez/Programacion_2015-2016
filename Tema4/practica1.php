<?php

	$nombre = array("roberto","juan","marta","maria","martin","jorge","miriam","nacho","mila");
	$contador=0;
		for ($i=0; $i <sizeof($nombre) ; $i++) { 
			$n=$nombre[$i];
			if ($n[0]=="m") {
				$nombresm[$contador]=$n;
				$contador++;
			}
		}
		for ($i=0; $i < sizeof($nombresm)-1; $i++) { 
			echo "$nombresm[$i], ";
		}
		echo "$nombresm[$i]";
	

?>