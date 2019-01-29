<?php
/*
 CLASE PARA LA GESTION DE LOS UNIVERSITARIOS
*/
require_once "db.class.php";

class Usuario extends Database {

	/* REALIZA UNA CONSULTA A LA BASE DE DATOS EN BUSCA DE  REGISTROS UNIVERSITARIOS DADOS COMO
	     PARAMETROS LA "CARRERA" Y LA "CANTIDAD" DE REGISTROS A MOSTRAR
		 INPUT:
		 $carrera | nombre de la carrera a buscar
		 $limit | cantidad de registros a mostrar
		 OUTPUT:
		 $data | Array con los registros obtenidos, si no existen datos, su valor es una cadena vacia
	 */
	function usuarios($facultad=NULL)
	{
		//conexion a la base de datos
		$this->conetar();		
		$query = $this->consulta("SELECT * FROM usuarios WHERE Facultad='$facultad'");
 	    $this->disconnect();					
		if($this->numero_de_filas($query) > 0) // existe -> datos correctos
		{		
				//se llenan los datos en un array
				while ( $tsArray = $this->fetch_assoc($query) ) 
					$data[] = $tsArray;			
		
				return $data;
		}else
		{	
			return '';
		}			
	}

	function usuariosDni($dni=NULL)
	{
		//conexion a la base de datos
		$this->conectar();		
		$query = $this->consulta("SELECT * FROM usuarios WHERE DNI=$dni");
 	    $this->disconnect();					
		if($this->numero_de_filas($query) > 0) // existe -> datos correctos
		{		
				//se llenan los datos en un array
				while ( $tsArray = $this->fetch_assoc($query) ) 
					$data[] = $tsArray;			
		
				return $data;
		}else
		{	
			return '';
		}			
	}

	function insertar($nombre, $apellido1, $apellido2, $dni, $facultad)
	{
		//conexion a la base de datos
		$this->conectar();	
		$sentencia = "INSERT INTO usuarios VALUES ('$nombre', '$apellido1', '$apellido2', $dni, '$facultad')";	
		if($query = $this->consulta($sentencia)){
			$this->disconnect();	
			return true;
		}else{
			$this->disconnect();	
			return false;
		}
 	    
 	    				
		
					
	}

	function actualizar($nombre, $apellido1, $apellido2, $dni, $facultad)
	{
		//conexion a la base de datos
		$this->conectar();	
		$sentencia = "UPDATE usuarios SET Nombre='$nombre', Apellido1='$apellido1', Apellido2='$apellido2', Facultad='$facultad' WHERE DNI=$dni";
		echo $sentencia;	
	$query = $this->consulta("UPDATE usuarios SET Nombre='$nombre', Apellido1='$apellido1', Apellido2='$apellido2', Facultad='$facultad' WHERE DNI=$dni");
 	    $this->disconnect();					
		if($query) // existe -> datos correctos
		{		
				return true;
		}else
		{	
			return false;
		}			
	}
	
}

?>