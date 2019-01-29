<?php

//RECUPERAR INFO DEL FORMULARIO
$nombre = $_POST["nombre"];
$antiguedad = $_POST["antiguedad"];
$matricula = $_POST["matricula"];
$precio = $_POST["precio"];
$descuento = $_POST["descuento"];
$numPuertas = $_POST["numPuertas"];

//PASO 0 CREAR LA CADENA CON LA SENTENCIA SQL
$sentenciaSQL_INSERT = "INSERT INTO coches (nombre, antiguedad, matricula, precio,descuento,numPuertas) 
						VALUES ('$nombre', $antiguedad, '$matricula', $precio, $descuento, $numPuertas)";

//PASO 1 CREAR UNA CONEXION CON LA BD
$c = mysqli_connect("localhost","root", "root", "concesionario");

//PASO 2 EJECUTAR LA CONSULTA
if ($conjuntoDeFilas = mysqli_query($c, $sentenciaSQL_INSERT)){ //se hace el insert, update, delete
	echo "La ejecución de la sentencia SQL ha ido bien <br>";

} else{
	echo "La ejecución de la sentencia SQL no ha ido bien <br>";
	echo "Erro: " . mysqli_error();
}

//PASO 3 CERRAR LA CONEXION
mysqli_close($c);

?>