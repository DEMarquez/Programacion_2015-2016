<?php

abstract class Instrumento{
	public $nombre;

	public function __construct($nombre){
		$this->nombre = $nombre;
	}
	
    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    abstract function tocar();

}	

?>