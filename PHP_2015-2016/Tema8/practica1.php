<?php

	class Producto{
		
		private $id;
		private $titulo;
		private $precio;
		private $nombre;
		private $apellido;
		
		function __construct($id,$titulo,$precio,$nombre,$apellido){
			$this->id=$id;
			$this->titulo=$titulo;
			$this->precio=$precio;
			$this->nombre=$nombre;
			$this->apellido=$apellido;
		}

		public function getNombre(){//muestra la informacion
			return $this->nombre;
		}

		public function getPrecio(){
			return $this->precio;
		}

		public function getTitulo(){
			return $this->titulo;
		}
	}//fin clase

	class Libro extends Producto{
		private $numPaginas;

		function __construct($id,$titulo,$precio,$nombre,$apellido,$numPaginas){
				parent::__construct($id,$titulo,$precio,$nombre,$apellido);
				$this->numPaginas=$numPaginas;
			}

		public function getNumpaginas(){
			return $this->$numPaginas;
		}

		public function caracteristicas(){
			$cadena="Nombre autor: " . $this->getNombre() . "<br>" .
					"Titulo: " . $this->getTitulo() . "<br>" .
					"Precio: " . $this->getPrecio();

			return $cadena;
		}
	

}//fin clase

	$libro=new Libro(1,"pepe",10,"bla blas","garcia lorca",1234);
	
	$text=$libro->caracteristicas();
	echo $text;

?>