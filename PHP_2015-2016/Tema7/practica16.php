<?php
class Empleado{

	public $nombre;
	public $salario;
	public $anyoalta;

	public function __construct($nombre,$salario,$anyoalta){
		$this->nombre=$nombre;
		$this->salario=$salario;
		$this->anyoalta=$anyoalta;
	}

	public function setNombre($nNombre){
		$this->nombre=$nNombre;
	}
	
	public function getNombre(){
		return $this->nombre;
	}

	public function setSalario($nSalario){
		$this->salario=$nSalario;
	}
	
	public function incrementoSalario($incremento){
		if ($incremento>0) {
			$this->salario=$this->salario+$incremento;
		}else{
			echo "Error";
		}
	}
	
	public function getSalario(){
		return $this->salario;
	}

	public function setAnyoalta($nAnyoalta){
		$this->anyoalta=$nAnyoalta;
	}
	
	public function getAnyoalta(){
		return $this->anyoalta;
	}

	
	public function mostrarDatos(){
			$text="<b>Nombre</b> $this->nombre <br>" . "<b>Salario</b> $this->salario <br>" . "<b>Año de alta en la empresa</b> $this->anyoalta <br>";
			return $text;
		}

}

$miEmpleado = new Empleado("Daniel",1500,2005);
$miEmpleado2= new Empleado("pepe",1250,2007);

echo "Empleado 1 <br>";
$text=$miEmpleado->mostrarDatos();
echo $text . "<br>";
echo "<b>Sueldo aumentado</b> <br>";
$miEmpleado->incrementoSalario(250);
$text=$miEmpleado->mostrarDatos();
echo $text . "<br>";
echo "Empleado 2 <br>";
$text=$miEmpleado2->mostrarDatos();
echo $text . "<br>";
echo "<b>Sueldo aumentado</b> <br>";
$miEmpleado2->incrementoSalario(250);
$text=$miEmpleado2->mostrarDatos();
echo $text . "<br>";


?>