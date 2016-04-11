<?php
	class cabeceraPagina{
		
		public $titulo;
		public $posicion;
		public $colorFuente;
		public $colorFondo;

		public function inicializar($titulo,$posicion,$colorFuente,$colorFondo){

			$this->titulo=$titulo;
			$this->posicion=$posicion;
			$this->colorFuente=$colorFuente;
			$this->colorFondo=$colorFondo;

		}

		function mostar(){
			echo ' <div style="text-align: ' . $this->posicion . '; 
								background-color:' . $this->colorFondo . ';
								color:' . $this->colorFuente . '">';
			echo $this->titulo;
			echo '</div>';
		}

	}

	$miCabecera=new cabeceraPagina();
	$miCabecera->inicializar("Cabecera de la pagina","center","red","blue");
	$miCabecera->mostar();

?>