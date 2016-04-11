<?php
class Nombre_usuario{

	public $mensaje;
	

	function __construct($mensaje){
		$this->mensaje=$mensaje;
		
	}

	public function saludo($nombre){
			echo $this->mensaje . $nombre . "<br>";
			
		}

}

$Nombre_usuario=new Nombre_usuario('Hola soy');
$Nombre_usuario->saludo(' Daniel');

?>