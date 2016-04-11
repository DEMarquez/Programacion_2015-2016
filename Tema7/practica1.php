<?php
class Circulo{

	var $radio;

	function asignaRadio($valor){
		$this->radio=$valor;
	}

	function daRadio(){
		return $radio;
	}

	function longitud(){
		return 2*M_PI*radio;
	}

	function area(){
		return 2*M_PI*radio*radio;
	}

	function mayorQue($otroCirculo){
		return ($this->radio > $otroCirculo->radio);
	}

}

$miCirculo1=new Circulo();
echo $miCirculo1->asignaRadio(2);

$miCirculo2=new Circulo();
echo $miCirculo2->asignaRadio(7);

if($miCirculo1 -> $mayorQue($miCirculo2)){
	echo "circulo1 es el mayor que circulo2";
}else{
	echo "circulo2 es el mayor que circulo1";
}

?>