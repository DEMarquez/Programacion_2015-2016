<?php

require_once("figura1d.class.php");

	class circulo extends figura2d{
		
		private $xCentro;
		private $yCentro;
		private $radio;	

	public function __construct($color,$ptoIni, $ptoFin, $colorRelleno, $xCentro, $yCentro, $radio){
		parent:: __construct($color,$ptoIni, $ptoFin, $colorRelleno);

		$this->xCentro = $xCentro;
		$this->yCentro = $yCentro;
		$this->radio = $radio;

	}

    public function getXCentro(){
        return $this->xCentro;
    }

    public function setXCentro($xCentro){
        $this->xCentro = $xCentro;

    }

    public function getYCentro(){
        return $this->yCentro;
    }
    public function setYCentro($yCentro){
        $this->yCentro = $yCentro;

    }

    public function getRadio(){
        return $this->radio;
    }

    public function setRadio($radio){
        $this->radio = $radio;

    }

    public function borrar(){
       
    }

    public function dibujar(){
        
    }
    
}

?>