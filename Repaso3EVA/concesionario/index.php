<?php

	include_once('coche.class.php');
	include_once('concesionario.class.php');

	$coche1= new coche("coche1", 3, "DASESG", 16000, 20, 5);
	//$cadenaCoche1=$coche1->generarInformacionCoche();
	//echo $cadenaCoche1;

	$coche2= new coche("coche2", 4, "DAESG", 15000, 28, 4);
	//$cadenaCoche2=$coche2->generarInformacionCoche();
	//echo $cadenaCoche2;

	$coche3= new coche("coche3", 5, "DASSG", 14000, 24, 7);
	//$cadenaCoche3=$coche3->generarInformacionCoche();
	//echo $cadenaCoche3;

	$vehiculos=array($coche1,$coche2,$coche3);

	$concesionario=new concesionario($vehiculos);

	$lista=$concesionario->listarVehiculos();
	echo $lista;

?>