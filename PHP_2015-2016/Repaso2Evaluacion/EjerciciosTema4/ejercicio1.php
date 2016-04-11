<?php

	$nombres = array('roberto','juan','marta','maria','martin','jorge','miriam','nacho','mirta');
	$contador=0;

	for ($i=0; $i <sizeof($nombres) ; $i++) { 
		$n=$nombres[$i];
		if ($n[0]=="m") {
			$nombresm[$contador]=$n;
			$contador++;
		}
	}

	for ($i=0; $i < sizeof($nombresm)-1 ; $i++) { 
		echo "$nombresm[$i] , ";
	}
		echo "$nombresm[$i]";
?>