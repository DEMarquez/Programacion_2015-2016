<?php

	class empleado {
		
		private $horasTrabajadas;
		private $valorHora;

	public function __construct($horasTrabajadas, $valorHora){
		
		$this->horasTrabajadas = $horasTrabajadas;
		$this->valorHora = 3.5;

    }

    public  function calcularSueldo(){
    	$operacion=0;

    	$operacion= $this->horasTrabajadas * $this->valorHora;

    	return $operacion;
    }

}

?>