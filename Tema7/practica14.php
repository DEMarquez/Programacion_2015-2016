<?php
class Empleado{

	public $id;
	public $colorCorbata;

	public function __construct($id,$colorCorbata){
		$this->id=$id;
		$this->colorCorbata=$colorCorbata;
	}

	public function setId($nID){
		$this->id=$nID;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function setColorCorbata($nColorCorbata){
		$this->colorCorbata=$nColorCorbata;
	}
	
	public function getColorCorbata(){
		return $this->colorCorbata;
	}

	public function __clone(){
		$this->colorCorbata="azul";
	}

	public function mostrarDatos(){
			$text="<b>Identificador corbata</b> $this->id <br>" . "<b>Color corbata</b> $this->colorCorbata <br>";
			return $text;
		}

}

$miEmpleado = new Empleado(1,"rojo");
$text=$miEmpleado->mostrarDatos();
echo $text . "<br>";
$miEmpleado2 =clone $miEmpleado;//clonamos $miEmpleado
$text=$miEmpleado2->mostrarDatos();
echo $text;
	
?>