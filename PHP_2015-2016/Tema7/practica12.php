<?php
class Ordenar{

	public $num;

	public function __construct($num){
		$this->num=$num;
	}
	
	public function ordena(){
		sort($this->num);
	}

}

$Ordenar=new Ordenar(array(11, -2, 4, 35, 0, 8, -9));
$Ordenar->ordena();
var_dump($Ordenar->num);

?>