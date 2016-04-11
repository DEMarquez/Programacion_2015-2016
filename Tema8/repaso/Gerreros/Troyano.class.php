<?php

require_once ("Gerrero.class.php");

abstract class Troyano extends Gerrero{

	public function __construct($nombre,$edad,$fuerza){
		parent::__construct($nombre,$edad,$fuerza);
		
	}

	public function retirarse(){
		
		return false;
	}

}


?>