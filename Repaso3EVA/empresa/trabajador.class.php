<?php

abstract class trabajador{
		
		private $nombre;
		private $sueldo;

	public function __construct($nombre, $sueldo){

		$this->nombre = $nombre;
		$this->sueldo = $sueldo;
	}

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;

    }

    public function getSueldo(){
        return $this->sueldo;
    }

    public function setSueldo($sueldo){
        $this->sueldo = $sueldo;

    }

    public function imprimir(){
    	$cadena="Nombre: " . $this->nombre . "<br>" .
    			"Sueldo: " . $this->sueldo;

    	return $cadena;
    }

    abstract function calcularSueldo();

}

?>