<?php
include("mysqli.inc.php"); 

$nombre = $_POST["nombre"];
$dni = $_POST["dni"];


$conexion=mysqli_connect($cfg_servidor,$cfg_usuario,$cfg_password,$cfg_basephp1); 

$sentenciaSQL_UPDATE= "UPDATE usuarios SET Nombre='$nombre' WHERE DNI='$dni'";

if (mysqli_query($conexion,$sentenciaSQL_UPDATE)) {
	echo "La ejecucion de la sentencia SQL ha ido bien <br>";
}else{
	echo "La ejecucion de la sentencia SQL no ha ido bien <br>";
	echo "Error: " . mysqli_error();
}

mysqli_close($conexion); 

?>