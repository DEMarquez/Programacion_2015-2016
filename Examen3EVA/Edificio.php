<?php

abstract class Edificio {
	
	private $id;
	private $nombre;
	private $arquitecto;
	private $anyo;
	private $direccion;
	private $precioEntrada;
		
	public function __construct($id,$nombre,$arquitecto,$anyo,$direccion,$precioEntrada){
			
			$this->id=$id;
			$this->nombre=$nombre;
			$this->arquitecto=$arquitecto;
			$this->anyo=$anyo;
			$this->direccion=$direccion;
			$this->precioEntrada=$precioEntrada;

		}

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;

    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;

    }

    public function getArquitecto(){
        return $this->arquitecto;
    }

    public function setArquitecto($arquitecto){
        $this->arquitecto = $arquitecto;

    }

    public function getAnyo(){
        return $this->anyo;
    }

    public function setAnyo($anyo){
        $this->anyo = $anyo;

    }

    public function getDireccion(){
        return $this->dirección;
    }

    public function setDireccion($dirección){
        $this->dirección = $dirección;

    }

    public function getPrecioEntrada(){
        return $this->precioEntrada;
    }

    public function setPrecioEntrada($precioEntrada){
        $this->precioEntrada = $precioEntrada;

    }

    abstract function aplicarDescuento();

    public function toString(){
    	
    	$cadena="Identificador: " . $this->id . "<br>" .
    			"Nombre: " . $this->nombre . "<br>" .
    			"Arquitecto: " . $this->arquitecto . "<br>" .
    			"Año: " . $this->anyo . "<br>" .
    			"Dirección: " . $this->direccion . "<br>" .
    			"Precio de la entrada: " . $this->precioEntrada;

    	return $cadena;		
    }

}

?>