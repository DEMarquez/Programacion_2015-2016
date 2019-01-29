<?php
include("mysqli.inc.php"); 

$nombre = $_POST["nombre"];
$dni = $_POST["dni"];


$conexion=mysqli_connect($cfg_servidor,$cfg_usuario,$cfg_password,$cfg_basephp1); 

$sentenciaSQL_DELETE= "DELETE FROM usuarios WHERE DNI='$dni'" ;

if (mysqli_query($conexion,$sentenciaSQL_DELETE)) {
	echo "La ejecucion de la sentencia SQL ha ido bien <br>";
}else{
	echo "La ejecucion de la sentencia SQL no ha ido bien <br>";
	echo "Error: " . mysqli_error();
}

mysqli_close($conexion); 

?>