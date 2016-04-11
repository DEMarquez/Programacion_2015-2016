<?php

require_once ("Gerrero.class.php");

abstract class Griego extends Gerrero{

	public function __construct($nombre,$edad,$fuerza){
		parent::__construct($nombre,$edad,$fuerza);
		
	}

	public function retirarse(){
		
		if($this->herido==true && $this->muerto==false{ 
			return true;
		}else{
			return false;
		}
	}

}

?>