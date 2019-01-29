<?php

include_once('vehiculo.class.php');

class coche extends vehiculo{
    
    private $descuento;
    private $numPuertas;

	public function __construct($nombre, $antiguedad, $matricula, $precio,$descuento,$numPuertas){
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

        $precioFinal = $this->getPrecio() - ($this->descuento * $this->getPrecio()/100);
        return $precioFinal;

    }

     public function generarInformacionCoche(){
        $cadena = parent::generarInformacion() . "descuento: " . $this->descuento . "<br>" .
                "numPuertas: " . $this->numPuertas . "<br>";
       /* SE PUEDE HACER DE ESTA MANERA TAMBIEN
        $cadena=$cadena . "Descuento: " . $this->descuento . "<br>" .
                            "Numero de puertas: " . $this->numPuertas . "<br>"; */

        return $cadena;
    }

}

?>