<?php

class cochesDB{

	function insertarCoche($nombre, $antiguedad, $matricula, $precio, $descuento, $numPuertas){

		$conexion = mysqli_connect("localhost" , "root" , "root" , "concesionario");
		$sqlInsert = "INSERT INTO coches (nombre, antiguedad, matricula, precio, descuento, numPuertas)
						VALUES ('$nombre', $antiguedad, '$matricula', $precio, $descuento, $numPuertas)";

		if ($resultado = mysqli_query($conexion, $sqlInsert)) {
			echo "La ejecución de la sentencia SQL ha ido bien <br>";
		}else{
			echo "La ejecución de la sentencia SQL no ha ido bien <br>";
			echo "Erro: " . mysqli_error($conexion);
		}
		mysqli_close($conexion);
	}

}

cochesDB::insertarCoche("Seat altea",10,"pgr1230",20000,20,5);

?>