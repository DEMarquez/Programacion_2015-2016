<?php
	class Cafetera{
		
		public $capacidadMaxima;
		public $cantidadActual;
		

		public function __construct($capacidadMaxima,$cantidadActual){

			if ($cantidadActual > $capacidadMaxima) {
				$this->cantidadActual=$capacidadMaxima;
			}else{//$cantidadActual<=$capacidadMax
				$this->cantidadActual=$cantidadActual;
			}
			$this->capacidadMaxima=$capacidadMaxima;
		}

		public function llenarCafetera(){
			$this->cantidadActual=$this->capacidadMaxima;
		}

		public function servirTaza($cantidad){
			if ($cantidad>$this->cantidadActual) {
				$this->cantidadActual=0;
			}else{
				$this->cantidadActual=$this->cantidadActual-$cantidad;
			}
		}

		public function vaciarCafetera(){
			$this->cantidadActual=0;
		}

		public function agregarCafe($cantidadCafe){
			$totalCantidad=$this->cantidadActual+$cantidadCafe;
			if ($totalCantidad > $this->capacidadMax) {
				$this->cantidadActual=$this->capacidadMaxima;
			}else{
				$this->cantidadActual=$totalCantidad;
			}
		}
		public function mostrarEstado(){
			echo "la capacidadMax es: " . $this->capacidadMaxima . "<br>";
			echo "la cantidadActual es: " . $this->cantidadActual . "<br>";
			echo "<br>";
		}

	}

$miCafetera=new Cafetera(5,20);
$miCafetera->mostrarEstado();
$miCafetera->servirTaza(2);
$miCafetera->mostrarEstado();
$miCafetera->servirTaza(2);	
$miCafetera->mostrarEstado();

	
?>