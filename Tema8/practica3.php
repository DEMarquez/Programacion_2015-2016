<?php

	class Empleado{
		
		private $name;
		
		function __construct($name){
			$this->name=$name;
			
		}

		public function getNombre(){//muestra la informacion
			return $this->name;
		}
		
		public function setNombre($nNombre){//renombra atributo
			 $this->name=$nNombre;
		}
		
		
	}//fin clase

	class Ejecutivo extends Empleado{
		private $despacho;

		function __construct($name,$despacho){
				parent::__construct($name);
				$this->despacho=$despacho;
			}

		public function mostrarDespacho(){
			return $this->despacho;
		}

		
	}//fin clase

$ejecutivo=new Ejecutivo("pepe","b2");
	$nombre=$ejecutivo->getNombre();
	$despacho=$ejecutivo->mostrarDespacho();
	echo "<b>Nombre: </b>" . $nombre . "<br>";
	echo "<b>Despacho: </b>" . $despacho . "<br>";


	

?>