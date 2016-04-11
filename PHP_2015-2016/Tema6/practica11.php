<?php
	
	echo "Nombre usuario: " . $_GET["nombre"] . "<br>";
	
	echo "<br>";

	if ($_GET["ingresos"] == "+3000") {
		echo "debes pagar un impuesto as superado los 3000";
	}else{
		echo "El usuario a ingresado: " . $_GET["ingresos"] . "<br>";
	}

?>