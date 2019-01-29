<?php

	class Database{

		private $conexion;

		public function conectar(){
			if (!isset($this->conexion)) {
				if($this->conexion = mysql_connect("localhost","root","root","biblioteca")){
					echo "Se a realizado la conexion correctamente";
				}else{
					echo "No se a realizado la conexion ";
				}
			}
		}

		public function consulta ($sql){
			$resultado = mysql_query($this->conexion, $sql);
			return $resultado;
		}
		
		public function numero_de_filas($result){
			if(!is_resource($result)){
				return false;
			}	
			return mysql_num_rows($result);
			
		}
	/*METODO PARA CREAR ARRAY DESDE UNA CONSULTA 
		INPUT: $RESULT
		OUTPUT: ARRAY CON LOS RESULTADOS DE UNA CONSULTA*/	
		public function fetch_assoc($result){
			return mysql_fetch_assoc($result);
		}
	/*DESCONECTAR CONEXION A BASE DE DATOS*/	
		public function disconect(){
			mysql_close($this->conexion);
		}

	}

?>