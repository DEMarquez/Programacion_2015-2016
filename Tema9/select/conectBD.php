<?php
include("mysqli.inc.php"); 

$nombre = $_POST["nombre"];
$dni = $_POST["dni"];


$conexion=mysqli_connect($cfg_servidor,$cfg_usuario,$cfg_password,$cfg_basephp1); 

$sentenciaSQL_SELECT= "SELECT DNI FROM usuarios WHERE Nombre='$nombre'" ;

if ($conjuntoDeFilas=mysqli_query($conexion,$sentenciaSQL_SELECT)) {
	echo "La ejecucion de la sentencia SQL ha ido bien <br>";
	while ($filaObjeto = mysqli_fetch_object($conjuntoDeFilas)) {
		echo $filaObjeto->Nombre . "<br>";
		echo $filaObjeto->DNI . "<br>";
	}
}else{
	echo "La ejecucion de la sentencia SQL no ha ido bien <br>";
	echo "Error: " . mysqli_error();
}

mysqli_close($conexion); 

?>