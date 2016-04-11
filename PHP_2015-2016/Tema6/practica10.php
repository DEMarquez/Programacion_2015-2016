<?php
	
	echo "Nombre usuario: " . $_GET["nombre"] . "<br>";
	
	echo "<br>";
	echo "Deportes seleccionados: <br>";
	echo "<br>";
	$deporte = $_GET["deporte"];
	foreach ($deporte as $indice => $valor) {
	echo "<b>*</b> $valor<br>";
}
	echo "<br>";
	echo "As elegido " . sizeof($deporte) . " deportes";
?>