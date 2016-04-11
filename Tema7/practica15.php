<?php
class Persona{

	public $nombre;
	public $edad;

	public function __construct($nombre,$edad){
		$this->nombre=$nombre;
		$this->edad=$edad;
	}

	public function setNombre($nNombre){
		$this->nombre=$nNombre;
	}
	
	public function getNombre(){
		return $this->nombre;
	}
	
	public function setEdad($nEdad){
		$this->edad=$nEdad;
	}
	
	public function getEdad(){
		return $this->edad;
	}

	public function __clone(){
		$this->edad=$this->edad+1;
	}

	public function mostrarDatos(){
			$text="<b>Nombre</b> $this->nombre <br>" . "<b>Edad</b> $this->edad <br>";
			return $text;
		}

}

$miPersona = new Persona("Daniel","24");
$text=$miPersona->mostrarDatos();
echo $text . "<br>";
$miPersona2 =clone $miPersona;//clonamos $miEmpleado
$text=$miPersona2->mostrarDatos();
echo $text;
?>