<?php
	
	echo "Metodo de pago: " . $_GET["pago"] . "<br>";
	echo "Distribuidor seleccionado: " . $_GET["distribuidor"] . "<br>";

	echo "<br>";
	echo "Has comprado: <br>";
	echo "<br>";
	$productos = $_GET["productos"];
	foreach ($productos as $indice => $valor) {
	echo "<b>*</b> $valor<br>";
}

?>