<?php

require_once("figura1d.class.php");

	class cuadrado extends figura2d{
		
		private $x0;
		private $y0;
		private $x1;
		private $y1;	

	public function __construct($color,$ptoIni, $ptoFin, $colorRelleno, $x0, $y0, $x1, $y1){
		parent:: __construct($color,$ptoIni, $ptoFin, $colorRelleno);

		$this->x0 = $x0;
		$this->y0 = $y0;
		$this->x1 = $x1;
		$this->y1 = $y1;

	}

    public function getX0(){
        return $this->x0;
    }

    public function setX0($x0){
        $this->x0 = $x0;

    }

    public function getY0(){
        return $this->y0;
    }

    public function setY0($y0){
        $this->y0 = $y0;

    }

    public function getX1(){
        return $this->x1;
    }

    public function setX1($x1){
        $this->x1 = $x1;

    }

    public function getY1(){
        return $this->y1;
    }

    public function setY1($y1){
        $this->y1 = $y1;

    }

    public function borrar(){
       
    }

    public function dibujar(){
        
    }
    
}

?>