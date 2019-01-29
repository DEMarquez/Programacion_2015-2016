<?php


class Excursion {
	
	private $itinerario;
	private $precio=0;

	public function __construct($itinerario){
		$this->itinerario = $itinerario;
		
		for ($i=0; $i < sizeof($this->itinerario); $i++) { 
		$this->precio=$this->precio+$this->itinerario[$i]->getPrecioEntrada;

		}
	}

	public function calcularPrecio(){
		for ($i=0; $i < sizeof($this->itinerario); $i++) { 
			$this->precio=$this->$this->precio + $this->itinerario[$i]->getPrecioEntrada();
		}
	}

	public function validarItinerario($precioMaximo){
		if ($precioMaximo <= $this->precio) {
			return true;
		}else{
			return false;
		}
	}

	public function anaydirExcursion($edificio){
		$this->itinerario[]=$edificio;
	}

	public function contarEdificios(){

		return(sizeof($this->itinerario))

	}

	public function toString(){
		$cadena="";

		for ($i=0; $i < sizeof($this->itinerario); $i++) { 
			$cadena = $cadena . $this->itinerario[$i]->toString();
		}
		return $cadena
	}

}

?>