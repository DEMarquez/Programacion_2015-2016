<?php

class MuseoBD{

	function insertarMuseo($nombre, $arquitecto, $anyo, $direccion , $precioEntrada){
		$conexion=mysqli_connect("localhost","root","root","bdmuseos");

		$sqlQuery="INSERT INTO museo(nombre, arquitecto, anyo, direccion, precioEntrada) 
					VALUES('$nombre', '$arquitecto', $anyo, '$direccion', $precioEntrada)";

		if ($resultado=mysqli_query($conexion,$sqlQuery)) {
			echo "Se a introducido correctamente";
		}else{
			echo "Se a producido un error";
			echo "Error: " . mysqli_error($conexion);
		}


		mysqli_close($conexion);
	}
}

MuseoBD::insertarMuseo("QUE TE REBIENTO","TE REBIENTO",1,"LA PUERTA TU PUTA CASA",500);
?>