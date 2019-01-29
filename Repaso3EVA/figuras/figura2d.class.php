<?php

require_once("figura.class.php");

	class figura2d extends figura{
		
		private $colorRelleno;
		

	public function __construct($color,$ptoIni, $ptoFin, $colorRelleno){
		parent:: __construct($color);

		$this->colorRelleno = $colorRelleno;
	}

    public function getColorRelleno(){
        return $this->colorRelleno;
    }

    public function setColorRelleno($colorRelleno) {
        $this->colorRelleno = $colorRelleno;

    }

    public function cambiarColor(){
    	
    }
}

?>