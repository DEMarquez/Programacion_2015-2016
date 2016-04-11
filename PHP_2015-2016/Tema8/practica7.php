<?php
class Operacion {

	protected $valor1;
	protected $valor2;
	protected $resultado;

	public function cargar1($v){
		$this->valor1=$v;
	}
	public function cargar2($v){
		$this->valor2=$v;
	}
	public function imprimirResultado(){
		echo $this->resultado.'<br>';
	}

}

class Suma extends Operacion{
	
	public function operar(){
		$this->resultado=$this->valor1+$this->valor2;
	}

	public function imprimirResultado(){
		echo "Esta es la funcion imprime resultado de la clase suma <br>";
		parent::imprimirResultado();
	}

}

class Resta extends Operacion{
	
	public function operar(){
		$this->resultado=$this->valor1-$this->valor2;
	}

	public function imprimirResultado(){
		echo "Esta es la funcion imprime resultado de la clase resta <br>";
		parent::imprimirResultado();
	}
}

$suma = new Suma();
$suma->cargar1(5);
$suma->cargar2(10);
$suma->operar();
$suma->imprimirResultado();

$resta = new Resta();
$resta->cargar1(5);
$resta->cargar2(10);
$resta->operar();
$resta->imprimirResultado();



?>