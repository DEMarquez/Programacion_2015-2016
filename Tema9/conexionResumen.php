<?php

/***********************/
//EJEMPLO POR PROCESOS
/***********************/

//RECUPERAR INFO DEL FORMULARIO
$nombre = $_POST["nombre"];
$dni = $_POST["dni"];

//PASO 0 CREAR LA CADENA CON LA SENTENCIA SQL
//$sentenciaSQL_INSERT = "INSERT INTO usuarios (Nombre, DNI) VALUES ('$nombre', $dni)";
//$sentenciaSQL_UPDATE = "UPDATE usuarios SET Nombre='$nombre' WHERE DNI= $dni";
//$sentenciaSQL_DELETE = "DELETE FROM usuarios WHERE DNI= $dni";
$sentenciaSQL_SELECT = "SELECT DNI FROM usuarios WHERE Nombre='$nombre'";

//PASO 1 CREAR UNA CONEXION CON LA BD
$c = mysqli_connect("localhost","root", "root", "biblioteca");

//PASO 2 EJECUTAR LA CONSULTA
if ($conjuntoDeFilas = mysqli_query($c, $sentenciaSQL_SELECT)){ //se hace el insert, update, delete
	echo "La ejecución de la sentencia SQL ha ido bien <br>";
	//ESTE TROZO DE CÓDIGO CON LA INSTRUCCION WHILE ES SÓLO PARA LAS SENTENCIAS SELECT
	//COMENTARLO PARA OTRAS SENTENCIAS QUE NO SEAN SELECT
	while($filaObjeto = mysqli_fetch_object($conjuntoDeFilas)){
		echo $filaObjeto->Nombre . "<br>";
		echo $filaObjeto->DNI . "<br>";
	}//FIN CODIGO WHILE

} else{
	echo "La ejecución de la sentencia SQL no ha ido bien <br>";
	echo "Erro: " . mysqli_error();
}

//PASO 3 CERRAR LA CONEXION
mysqli_close($c);

?>