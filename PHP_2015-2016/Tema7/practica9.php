<?php
class clase{

	public $cadena;
	

	function __construct($cadena){
		$this->cadena=$cadena;
		
	}

	public function mostrarDatos(){
			echo"$this->cadena <br>";
			
		}

}

$clase=new clase('Mi clase ha sido inicializada');
$clase->mostrarDatos();

?>