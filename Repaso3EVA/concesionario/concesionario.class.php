<?php

class concesionario {
    
    private $vehiculos;
    private $valor;

	public function __construct($vehiculos){

        $this->vehiculos = $vehiculos;
	}

    public function getVehiculos(){
        return $this->vehiculos;
    }

    public function setVehiculos($vehiculos){
        $this->vehiculos = $vehiculos;

    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor=$valor;

    }

    public function listarVehiculos(){
        $cadenaVehiculos = "";
        for ($i=0; $i < sizeof($this->vehiculos); $i++) { 
            $cadenaVehiculos=$cadenaVehiculos . $this->vehiculos[$i]->generarInformacionCoche();
        }
        return $cadenaVehiculos;
    }

    public function calcularValor(){
        $this->valor=0;
        for ($i=0; $i < sizeof($this->vehiculos) ; $i++) { 
            $this->valor= $this->valor + $this->vehiculos[$i]->getPrecio();
        }
    }

    public function calcularValorMedioVehiculo(){
        
        $this->calcularValor();
    
        
        return $this->valor/sizeof($this->vehiculos);
    }

    public function buscarElCocheMasBarato(){
        $cocheBarato=$this->vehiculos[0];
        
        for ($i=0; $i < sizeof($this->vehiculos) ; $i++) { 
           
            if ($this->vehiculos[$i]->getPrecio() < $PrecioMasBarato) {
                $PrecioMasBarato= $this->vehiculos[$i]->getPrecio();
            }

        }
       return $cocheBarato->generarInformacionCoche();
    }

    public function buscarElCocheMasCaro(){
        $PrecioMasCaro=0;

        for ($i=0; $i < sizeof($this->vehiculos) ; $i++) { 
           
            if ($this->vehiculos[$i]->getPrecio() > $PrecioMasCaro) {
                $PrecioMasCaro = $this->vehiculos[$i]->getPrecio();
            }

        }
       return $PrecioMasCaro;
    }

}

?>