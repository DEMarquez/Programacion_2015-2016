<?php

 abstract class vehiculos{
	
	private $nombre;
	private $antiguedad;	
	private $matricula;
	private $precio;


	public function __construct($nombre, $antiguedad, $matricula, $precio){
		$this->nombre = $nombre;
		$this->antiguedad = $antiguedad;
		$this->matricula = $matricula;
		$this->precio = $precio;
	}

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;

    }

    public function getAntiguedad(){
        return $this->antiguedad;
    }

    public function setAntiguedad($antiguedad){
        $this->antiguedad = $antiguedad;

    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;

    }

    public function getPrecio(){
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;

    }

    public function generarInformacion(){

    	$cadena="Nombre: " . $this->nombre . "<br>" .
    			"Antiguedad: " . $this->antiguedad . "<br>" .
    			"Matricula: " . $this->matricula . "<br>" .
    			"Precio: " . $this->precio . "<br>";

    	return $cadena;
    }

    abstract function calcularPrecio();

}


?>