<?php
class Opcion{

	private $titulo;
	private $direccion;
	private $colorFondo;

	public function __construct($titulo,$direccion,$colorFondo){
		$this->titulo=$titulo;
		$this->direccion=$direccion;
		$this->colorFondo=$colorFondo;
	}
	
	public function graficar(){
		echo'<a href="' . $this->direccion . '">' . $this->titulo . '</a>';
	}
}//fin clase opcion


class menu{

	private $vectorOpciones;
	private $direccion;//horizontal o vertical

	public function __construct($direccion){
		$this->direccion=$direccion;
		$this->vectorOpciones=array();
	}
	
	public function insertar($opcion){
		$this->vectorOpciones[]=$opcion;
	}

	private function graficarVertical(){
		for ($i=0; $i < sizeof($this->vectorOpciones); $i++) { 
			$this->vectorOpciones[$i]->graficar();//graficar de clase opcion
			echo "<br>";
		}
	}
	private function graficarHorizontal(){
		for ($i=0; $i < sizeof($this->vectorOpciones); $i++) { 
			$this->vectorOpciones[$i]->graficar();//graficar de clase opcion
		}
	}

	public function graficar($direccion){
		if (strcmp($direccion,'vertical') == 0) {
			$this->graficarVertical();//graficar de clase menu
		}else{
			$this->graficarHorizontal();//graficar de clase menu
		}
	}
}//fin clase menu

$opcion=new opcion ("inicio","inicio.php","blue");
$opcion2=new opcion ("Sesion1","sesion1.php","red");
$opcion3=new opcion ("Sesion3","sesion3.php","geen");

$menu=new menu("vertical");
$menu->insertar($opcion);
$menu->insertar($opcion2);
$menu->insertar($opcion3);

$menu->graficar();

?>