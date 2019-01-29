<?php

include_once('vehiculo.class.php');

class moto extends vehiculo{
    
    private $;
    private $;

	public function __construct($nombre, $antiguedad, $matricula, $precio,$,$){
		parent::__construct($nombre, $antiguedad, $matricula, $precio);

        $this-> = $;
		$this-> = $;
	}

    public function getDescuento(){
        return $this->;
    }

    public function setDescuento($){
        $this-> = $;

    }

    public function getNumPuertas(){
        return $this->;
    }

    public function setNumPuertas($){
        $this-> = $;

    }

    public function calcularPrecio(){

        $precioFinal = $this->precio - ($this-> * $this->precio/100);
        return $precioFinal;

    }

     public function generarInformacionMoto(){
        $cadena = parent::generarInformacion() . ": " . $this-> . "<br>" .
                ": " . $this-> . "<br>";
       /* SE PUEDE HACER DE ESTA MANERA TAMBIEN
        $cadena=$cadena . "Descuento: " . $this->descuento . "<br>" .
                            "Numero de puertas: " . $this->numPuertas . "<br>"; */

        return $cadena;
    }

}

?>