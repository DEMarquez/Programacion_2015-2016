<?php

require_once ("Instrumento.class.php");
	
abstract class InstrumentoDeCuerda extends Instrumento{

	public $numeroCuerdas;


	public function __construct($nombre,$numeroCuerdas){
		parent::__construct($nombre);
		$this->numeroCuerdas = $numeroCuerdas;
	}

	public function getNumeroCuerdas(){
        return $this->numeroCuerdas;
  	}

 	public function setNumeroCuerdas($numeroCuerdas){
        $this->numeroCuerdas = $numeroCuerdas;
    }
     
}

?>