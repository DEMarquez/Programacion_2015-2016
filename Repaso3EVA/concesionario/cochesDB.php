<?php

class cocheDB {

	//RECUPERAR INFO DEL FORMULARIO
	function insertarCoche($nombre, $antiguedad, $matricula, $precio, $descuento, $numPuertas){
	
		//PASO 0 CREAR UNA CONEXION CON LA BD
		$conexion = mysqli_connect("localhost","root", "root", "concesionario");
	
		//PASO 1 CREAR LA CADENA CON LA SENTENCIA SQL
		$sentenciaSQL_INSERT = "INSERT INTO coches (nombre, antiguedad, matricula, precio,descuento,numPuertas) 
								VALUES ('$nombre', $antiguedad, '$matricula', $precio, $descuento, $numPuertas)";

		//PASO 2 EJECUTAR LA CONSULTA
		if ($resultado = mysqli_query($conexion, $sentenciaSQL_INSERT)){ //se hace el insert, update, delete
			echo "La ejecución de la sentencia SQL ha ido bien <br>";

		} else{
			echo "La ejecución de la sentencia SQL no ha ido bien <br>";
			echo "Erro: " . mysqli_error($conexion);
		}

		//PASO 3 CERRAR LA CONEXION
		mysqli_close($conexion);

	}
	
	
}

cocheDB::insertarCoche("mini copper",5,"jgs4656",45666,20,3);

?>