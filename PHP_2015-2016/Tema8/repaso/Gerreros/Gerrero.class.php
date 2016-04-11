<?php

abstract class Gerrero{
	
	private $nombre;
	private $edad;
	private $fuerza;
	private $herido;
	private $muerto;

	public function __construct($nombre, $edad, $fuerza, $herido, $muerto){
		$this->nombre = $nombre;
		
		if($this->comprobarEdad($edad)==true){
			$this->edad = $edad;
		}else{
			$this->edad = 25;
		}

		if($this->comprobarFuerza($fuerza)==true){
			$this->fuerza = $fuerza;
		}else{
			$this->fuerza = 5;
		}

		
		$this->herido = false;
		$this->muerto = false;
	}

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;

    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad){
        $this->edad = $edad;

    }

    public function getFuerza(){
        return $this->fuerza;
    }

    public function setFuerza($fuerza){
        $this->fuerza = $fuerza;

    }

    public function getHerido(){
        return $this->herido;
    }

    public function setHerido($herido){
        $this->herido = $herido;

    }

    public function getMuerto(){
        return $this->muerto;
    }

    public function setMuerto($muerto){
        $this->muerto = $muerto;

    }

    protected function comprobarEdad($e){

    	if ($e >= 15 && $e <= 60) {
    		return true;
    	}else{
    		return false;
    	}
    }

    protected function comprobarFuerza($f){
    	if ($f >= 1 && $f <= 10) {
    		return true;
    	}else{
    		return false;
    	}
    }

    abstract public function retirarse();

}

?>