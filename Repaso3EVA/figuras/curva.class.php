<?php

require_once("figura1d.class.php");

	class curva extends figura1d{
		
		private $radio;

	public function __construct($color,$ptoIni, $ptoFin, $radio){
		parent:: __construct($color,$ptoIni, $ptoFin);

		$this->radio = $radio;

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