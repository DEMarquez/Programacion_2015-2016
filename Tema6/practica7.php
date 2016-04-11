<?php
	$euros=166.386;
	$dolares=0.0065550814351824;

	echo "Cantidad: " . $_POST["pesetas"] . "<br>";
	echo "tipo de conversion " . $_POST["moneda"] . "<br>";
	if ($_POST["moneda"]==1) {
		echo $_POST["pesetas"]/$euros;
	}else{
		echo $_POST["pesetas"]*$dolares;
	}

?>