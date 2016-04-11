<?php

	
require_once ("Instrumento.class.php");
require_once ("InstrumentoDeCuerda.class.php");
	
class BajoElectrico extends InstrumentoDeCuerda{

	public function __construct($nombre,$numeroCuerdas){
		parent::__construct($nombre,$numeroCuerdas);
		
	}

	public function tocar(){
		$info="Una " . $this->nombre . " electrico de " . $this->numeroCuerdas."-cuerdas está sonando! <br>";
		return $info;	
	}
}	


?>