<?php

	class Persona{
		
		protected $nombre;
		protected $edad;
		
		function __construct($nombre,$edad){
			$this->nombre=$nombre;
			$this->edad=$edad;
		}

		public function getNombre(){//muestra la informacion
			return $this->nombre;
		}
		public function getEdad(){//muestra la informacion
			return $this->edad;
		}
		public function setNombre($nNombre){//renombra atributo
			 $this->nombre=$nNombre;
		}
		public function setEdad($nEdad){//renombra atributo
			$this->edad=$nEdad;
		}

		public function mostrarDatos(){
			$text="<b>nombre:</b> $this->nombre <br>" . "<b>edad:</b> $this->edad <br>";
			return $text;
		}
		
	}//fin clase

	class Empleado extends Persona{
		protected $sueldo;

		function __construct($nombre,$edad,$sueldo){
				parent::__construct($nombre,$edad);
				$this->sueldo=$sueldo;
			}

		public function getSueldo(){
			return $this->$sueldo;
		}

		public function setSueldo($nSueldo){
			$this->sueldo=$nSueldo;
		}

		public function mostrarDatos(){
			return parent::mostrarDatos() . "<b>sueldo:</b> $this->sueldo <br>";
		}
	}//fin clase

$persona=new Persona("pepe","26");
	$person=$persona->mostrarDatos();
	echo $person;

	echo "<br>";

$empleado=new Empleado("Daniel","24",2500);
	$text=$empleado->mostrarDatos();
	echo $text;
	

?>