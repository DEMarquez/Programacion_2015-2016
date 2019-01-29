<?php

require_once "db.class.php";
	
class Usuario extends Database{

	public function usuariosFacultad($facultad){
		//conexion a la base de datos
		$this->conectar();
		//creo una cadena con la consulta
		$sql="SELECT * FROM usuarios WHERE facultad='$facultad'";
		//ejecutar la consulta
		$resultado = $this->consulta($sql);
		//desconexion de la base de datos
		$this->disconnect();
		//procesar resultado
		if ($this->numero_de_filas($resultado)>0) {
			//SE LLENAN LOS DATOS EN UN ARRAY
			while ($fila =$this->fetch_assoc($resultado)){
				$data[]=$fila
			}
			return $data;
		}else{//SI NO SE HAN ENCONTRADO FILAS
			return '';
		}

	}//FIN FUNCION USUARIOSFACULTAT

	public function usuariosDni($dni){
		//conexion a la base de datos
		$this->conectar();
		//creo una cadena con la consulta
		$sql="SELECT * FROM usuarios WHERE dni='$dni'";
		//ejecutar la consulta
		$resultado = $this->consulta($sql);
		//desconexion de la base de datos
		$this->disconnect();
		//procesar resultado
		if ($this->numero_de_filas($resultado)>0) {
			//SE LLENAN LOS DATOS EN UN ARRAY
			while ($fila =$this->fetch_assoc($resultado)){
				$data[]=$fila
			}
			return $data;
		}else{//SI NO SE HAN ENCONTRADO FILAS
			return '';
		}
	}//FIN FUNCION USUARIOSDNI

	public function insertar($dni,$nombre,$apellido1,$apellido2,$facultad){
		//CONEXION A LA BASE DE DATOS
		$this->conectar();
		//CREAR LA CADENA DE LA CONSULTA
		$sql= "INSERT INTO usuarios VALUES ('$dni','$nombre','$apellido1','$apellido2','$facultad')";
		if ($this->consulta($sql)) {
			$this->disconnect();
			return true;
		}else{
			$this->disconnect();
			return false;
		}
	}//FIN FINCION INSERTAR

	public function actualizar($dni,$nombre,$apellido1,$apellido2,$facultad){

		$this->conectar();
		$sql= "UPDATE usuarios SET nombre='$nombre',apellido1='$apellido1',apellido2='$apellido2' WHERE dni='$dni'";
		$query= $this->consulta($sql);
		$this->disconnect();
		if($query){//EXISTE -> DATOS CORRETOS
			return true;
		}else{
			return false;
		}

	}//FIN FUNCION ACTUALIZAR

} 

?>