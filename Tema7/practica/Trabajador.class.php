<?php

	class Trabajadores{

		private $nombre;
		private $dni;
		private $antiguedad;
		private $salario;
		private $departamento;

	public function __construct($nombre, $dni, $antiguedad, $salario, $departamento){
		$this->nombre = $nombre;
		$this->dni = $dni;
		$this->antiguedad = $antiguedad;
		$this->salario = $salario;
		$this->departamento = $departamento;
	}

    public function getNombre(){
        return $this->nombre;
    }

    public function getDni(){
        return $this->dni;
    }

    public function getAntiguedad(){
        return $this->antiguedad;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function getDepartamento(){
        return $this->departamento;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }

    public function setDni($dni){
        $this->dni = $dni;
        return $this;
    }

    public function setAntiguedad($antiguedad){
        $this->antiguedad = $antiguedad;
        return $this;
    }

    public function setSalario($salario){
        $this->salario = $salario;
        return $this;
    }

    public function setDepartamento($departamento){
        $this->departamento = $departamento;
        return $this;
    }

    public function toString(){
		$cadena="<b>nombre</b> $this->nombre <br>" . 
				"<b>dni</b> $this->dni <br>" . 
				"<b>antiguedad</b> $this->antiguedad <br>" . 
				"<b>salario</b> $this->salario <br>" . 
				"<b>departamento</b> $this->departamento <br>";
		return $cadena;
	}
}

?>