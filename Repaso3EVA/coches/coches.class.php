<?php

require_once('vehiculos.class.php');

class coches extends vehiculos{
	
	private $descuento;
	private $numPuertas;

	public function __construct($nombre, $antiguedad, $matricula, $precio, $descuento, $numPuertas){
		parent::__construct($nombre, $antiguedad, $matricula, $precio);

		$this->descuento = $descuento;
		$this->numPuertas = $numPuertas;
	}

    public function getDescuento(){
        return $this->descuento;
    }

    public function setDescuento($descuento){
        $this->descuento = $descuento;

    }

    public function getNumPuertas(){
        return $this->numPuertas;
    }

    public function setNumPuertas($numPuertas){
        $this->numPuertas = $numPuertas;

    }

    public function calcularPrecio(){
    	
    	$precioFinal=$this->getPrecio() - ($this->descuento * $this->getPrecio()/100);
    	return $precioFinal;

    }

    public function generarInformacionCoches(){

    	$cadena = parent::generarInformacion() . "descuento: " . $this->descuento . "<br>" .
    			"Numero de puertas: " . $this->numPuertas . "<br>";

    	return $cadena;
    }

}

?>