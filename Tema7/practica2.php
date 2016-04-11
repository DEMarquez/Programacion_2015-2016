<?php
class empleado{

	public $salario;
	public $sueldo;

	function inicializar($nombre,$sueldo){
		$this->nombre=$nombre;
		$this->sueldo=$sueldo;
	}

	function imprimirMensaje(){
		if($this->sueldo > 3000){
			echo "el empleado tiene que pagar intereses";
		}
	}

}

$empleado=new empleado();
$empleado->inicializar('juan',5000);
$empleado->imprimirMensaje();

?>