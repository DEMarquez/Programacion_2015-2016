<?php

require_once("Edificio.php");

class Museo extends Edificio{
	
	private $exposiciones;
	private $descuento;

	public function __construct($id,$nombre,$arquitecto,$anyo,$direccion,$precioEntrada,$exposiciones, $descuento){
		parent:: __construct($id,$nombre,$arquitecto,$anyo,$direccion,$precioEntrada);
		
		$this->exposiciones = $exposiciones;
		$this->descuento = $descuento;

	}

	public function anyadirExposicion($nombreExposicion){
		$this->exposiciones[]=$nombreExposicion;
	} 

	public function  eliminarExposicion($nombreExposicion){
		for ($i=0; $i < sizeof($this->exposiciones); $i++) {
			 if($this->exposiciones[$i] == $nombreExposicion)
			 	$this->exposiciones[$i] == "";
			}	
		}

	}

	public function  listarExposiciones(){

		$cadenaExposiciones="";
		for ($i=0; $i < sizeof($this->exposiciones); $i++) { 
			$cadenaExposiciones=$cadenaExposiciones . $this->exposiciones[$i]->toString();

		}
		return $cadenaExposiciones;
	}

	public function aplicarDescuento(){
		$precioFinal=0;

		$precioFinal=$this->getPrecioEntrada() - ($this->descuento * $this->getPrecioEntrada()/100);

		return $precioFinal;
	}

	public function toString(){
    	
    	$cadena=parent::toString() . "Exposiciones: " . $this->exposiciones . "<br>" .
    								 "Descuento: " . $this->descuento;

    	return $cadena;		
    }

}

?>