<?php

	require_once('coches.class.php');
	require_once('concesionario.class.php');

	$coches1= new coches ("coches1",20,"dfg4560",1500,30,5);
	
	$coches2= new coches ("coches1",20,"dfg4560",1500,30,5);

	$coches3= new coches ("coches1",20,"dfg4560",1500,30,5);

	$vehiculos = array($coches1,$coches2,$coches3);

	$concesionario= new concesionario ($vehiculos);

	$lista=$concesionario -> listarVehiculos();

	echo $lista;

?>