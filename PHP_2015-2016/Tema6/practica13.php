<?php

if (isset($_POST["articulo"])) {
	echo "Rellena los campos <br>";
}

$pedido = $_POST["articulo"];
foreach ($articulo as $key => $value) {
	echo "$value <br>";
}

if($_POST["cantidad"] == 0){
	echo "Rellena la cantidad";
}else{
	echo "La cantidad es: " $_POST["cantidad"];
}



$dni= filter_input(INPUT_POST, "dni", FILTER_VALIDATE_INT);
if ($dni === false) {
echo "El valor del dni no se ha establecido correctamente <br>";
}

$mail= filter_input(INPUT_POST, "mail", FILTER_VALIDATE_EMAIL);
if ($mail === false) {
echo "El valor de ladireccion de email no se ha establecido correctamente <br>";
}


?>