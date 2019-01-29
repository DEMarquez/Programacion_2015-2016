<?php

require_once("figura.class.php");

	class figura1d extends figura{
		
		private $ptoIni;
		private $ptoFin;

	public function __construct($color,$ptoIni, $ptoFin){
		parent:: __construct($color);

		$this->ptoIni = $ptoIni;
		$this->ptoFin = $ptoFin;
	}

    public function getPtoIni(){
        return $this->ptoIni;
    }

    public function setPtoIni($ptoIni){
        $this->ptoIni = $ptoIni;

    }

    public function getPtoFin(){
        return $this->ptoFin;
    }

    public function setPtoFin($ptoFin){
        $this->ptoFin = $ptoFin;

    }
}

?>