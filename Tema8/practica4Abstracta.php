<?php

abstract class Trabajadores{

		protected $nombre;
		protected $sueldo;
	
	public function __construct($nombre, $sueldo){
		$this->nombre = $nombre;
		$this->sueldo = $sueldo;
	}

	abstract function calcularSueldo();
	
	public function imprimirSueldo(){
		return $this->sueldo;
	}

	public function imprimirNombre(){
		return $this->nombre;
	}

}

class Empleado extends Trabajador{

		protected $horasTrabajadas;
		protected $valorHora;
		
		function __construct($horasTrabajadas){
			$this->horasTrabajadas = $horasTrabajadas;
			$this->valorHora = 3.5;
		}

		public function calcularSueldo(){
			$this->sueldo=$this->horasTrabajadas*$this->valorHora;
		}
}



?>