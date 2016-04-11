<?php
class MiCalculadora{

	public $num1;
	public $num2;

	public function __construct($num1,$num2){
		$this->num1=$num1;
		$this->num2=$num2;
	}
	
	public function suma(){
		$calc=$this->num1 + $this->num2;
		return $calc;
	}

	public function resta(){
		$calc=$this->num1 - $this->num2;
		return $calc;
	}

	public function multiplicacion(){
		$calc=$this->num1 * $this->num2;
		return $calc;
	}

	public function division(){
		$calc=$this->num1 / $this->num2;
		return $calc;
	}

}

$micalc = new MiCalculadora( 12, 6);
echo "SUMA = " . $micalc -> suma() . "<br>"; // Mostraría 18
echo "RESTA =  " . $micalc -> resta() . "<br>"; // Mostraría 72
echo "MULTIPLICACION = " . $micalc -> multiplicacion() . "<br>";
echo "DIVISION = " . $micalc -> division() . "<br>";
?>