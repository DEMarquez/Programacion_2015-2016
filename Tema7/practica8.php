<?php
	class Personas{
		
		public $nombre;
		public $edad;
		public $id;

		public function __construct($nombre,$edad){
			$this->nombre=$nombre;
			$this->edad=$edad;
			//$this->id=0;
		}

		public function __destruct(){
			if (!empty($this->id)) {
				echo "Usuario eliminado " . $this->id . "<br>";
			}else{
				echo "Eliminando usuario <br>";
			}
			
		}

		public function setId($id){
			$this->id=$id;
		}

	}//fin clase

$miPersona= new Personas("luis",38);

$otraPersona= new Personas("Ana",35);
$otraPersona->setId(20);
	
?>