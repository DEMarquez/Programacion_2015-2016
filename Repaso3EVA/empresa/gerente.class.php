<?php

require_once("trabajor.class.php");

	class gerente extends trabajador{
		

	public function __construct($nombre, $sueldo){
		parent:: __construct($nombre, $sueldo);


    }

    public  function calcularSueldoGerente(){
    	$operacion=0;

    	$operacion= $this->calcularSueldo() + ($this->calcularSueldo() * 0.10);
    	
    	return $operacion;
    }

}

?>