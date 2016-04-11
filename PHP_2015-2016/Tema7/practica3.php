<?php
class menu{

	public $enlaces = array();
	public $titulos = array();

	public function cargarOpcion($enlace,$titulo){
		$this->enlaces[/*sizeof($this->enlaces)*/]=$enlace;
		$this->titulos[/*sizeof($this->titulos)*/]=$titulo;
	}

	public function mostrarHorizontal(){
		for ($i=0; $i <sizeof($this->enlaces) ; $i++) { 
			echo'<a href="'. $this->enlaces[$i] . '">' . $this->titulos[$i] . '</a>';
		}
	}

	public function mostrarVertical(){
		for ($i=0; $i <sizeof($this->enlaces) ; $i++) { 
			echo'<a href="'. $this->enlaces[$i] . '">' . $this->titulos[$i] . '</a><br>';
		}
	}

}

$miMenu= new menu();
$miMenu->cargarOpcion("seccion1.php","Sesion1");
$miMenu->cargarOpcion("seccion2.php","Sesion2");
$miMenu->cargarOpcion("seccion3.php","Sesion3");
$miMenu->mostrarHorizontal();
echo "<br>";
$miMenu->mostrarVertical();


?>