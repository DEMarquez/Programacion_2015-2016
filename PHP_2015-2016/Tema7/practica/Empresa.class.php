<?php
require_once "Trabajador.class.php";

	class Empresa{

		private $nombre;
		private $antiguedadEmpresa;
		private $maxTrabajadores;
		private $numTrabajadores;
		private $trabajadores;

	public function __construct($numTrabajadores, $trabajadores){
		
		$this->numTrabajadores = $numTrabajadores;
		$this->trabajadores = $trabajadores;
        $this->maxTrabajadores=100;
	}

    public function getNombreEmpresa(){
        return $this->nombre;
    }

    public function getNumMaxTrabajadores(){
        return $this->maxTrabajadores;
    }

    public function getNumTrabajadores(){
        return $this->numTrabajadores;
    }

    public function setNombreEmpresa($nombre){
         $this->nombre=$nombre;
    }

    public function setNumMaxTrabajadores($maxTrabajadores){
         $this->maxTrabajadores=$maxTrabajadores;
    }

    public function setNumTrabajadores($numTrabajadores){
         $this->numTrabajadores=$numTrabajadores;
    }

    public function existeEmpleado($numdni){
    	$i=0;
    	$existe=false;
    	while(!$existe && $i < sizeof($this->trabajadores)){
    		if ($this->trabajadores[$i]->getDni() == $numdni) {
    			$existe=true;
    		}else{
    			$i++;
    		}
    	}
    	return $existe;
    }

    public function anyadirEmpleado($e){
    	if ($this->existeEmpleado($e->getDni())==false) {
    		if ($this->numTrabajadores < $this->maxTrabajadores) {
    			$this->trabajadores[]=$e;
    		}else{
    			echo "Se a exedido el nº de trabajadores <br>";
    		}
    		
    	}
    	
    }

    public function cancelarEmpleado($dni){
    	$encontrado=false;
    	$i=0;
    	while(!$encontrado && $i < sizeof($this->trabajadores)){
    		if ($this->trabajadores[$i]->getDni()==$dni) {
    			$this->trabajadores[$i]==null;
    			$encontrado=true;
    			$mensaje="Empleado borrado del sistema <br>";
    			return $mensaje;
    		}else{
    			$i++;
    		}
    	}
    	return "imposible realizar la operacion";
    }

    public function getIdEmpleado($numDni){
    	$encontrado=false;
    	$i=0;
    	while(!$encontrado && $i < sizeof($this->trabajadores)){
    		if ($this->trabajadores[$i]->getDni()==$numDni) {
    			return $i;
    		}else{
    			$i++;
    		}
    	}
    	return "no se a encontrado";
    }

    public function getInfoEmpleado($numDni){
        $posicion=getIdEmpleado($numDni);
        $info = $this->trabajadores[$posicion]->toString();
        return $info;   
    }

    public function listarEmpleados(){
        $info="";
        for ($i=0; $i < sizeof($this->trabajadores); $i++) { 
            $info= $info . $this->trabajadores[$i]->toString() . "<br>";
        }
        return $info;
    }

    public function toHistograma(){

        $histograma=array(0,0,0,0,0,0,0,0,0,0);

        for ($i=0; $i < sizeof($this->trabajadores); $i++) { //array trabajadores
         $histograma[$this->trabajadores[$i]->getAntiguedad()]++;
        }

        //crear la cadena del histograma
        $cadenaHist="";
        for ($i=0; $i < sizeof($histograma); $i++) { 
            $cadenaHist = $cadenaHist . "$i: ";
            for ($j=0; $j < $histograma[$i]; $j++) { 
                $cadenaHist = $cadenaHist . "*";
            }
            $cadenaHist = $cadenaHist . "<br>";
        }
        return $cadenaHist;
    }

}

?>