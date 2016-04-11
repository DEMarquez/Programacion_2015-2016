<?php
class Cabecera {
	public $titulo;
	public $subtitulo;

	public function __construct($titulo,$subtitulo){
		$this->titulo=$titulo;
		$this->subtitulo=$subtitulo;
	}

	public function mostrar(){
		echo '<h1>' . $this->titulo . '</h1>';
		echo '<p>' . $this->subtitulo . '</p>';
	}
}//fin clase

class Cuerpo {
	public $div1;
	public $div2;

	public function __construct($text1,$text2){
		$this->div1=$text1;
		$this->div2=$text2;
	}

	public function mostrar(){
		echo '<div><p>' . $this->div1 . '</p></div>';
		echo '<div><p>' . $this->div2 . '</p></div>';
	}
}//fin clase

class Pie {
	public $mensaje;

	public function __construct($mensaje){
		$this->mensaje=$mensaje;
		
	}

	public function mostrar(){
		echo '<h5>' . $this->mensaje . '</h5>';
	}
}//fin clase

class Pagina {
	private $cabecera;
	private $cuerpo;
	private $pie;

	public function __construct($cabecera,$cuerpo,$pie){
		$this->cabecera=$cabecera;
		$this->cuerpo=$cuerpo;
		$this->pie=$pie;
	}

	public function mostrar(){
		echo '<html><head></head><body>';
		$this->cabecera->mostrar();
		$this->cuerpo->mostrar();
		$this->pie->mostrar();
		echo '</body></html>';
	}

}//fin clase

$cabecera=new Cabecera("Mi pagina","Esta es una pagina de prueba");
$cuerpo= new Cuerpo("apartado1","apartado2");
$pie=new Pie("FIN DE PAGINA");

$pagina=new Pagina($cabecera, $cuerpo, $pie);
$pagina->mostrar();


?>