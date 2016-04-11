<?php

	function equipo($jugadores){
		foreach ($jugadores as $key => $value) {
			echo $key ." - ";
			echo $value . "<br>";
		}
	}
	
	$jugadores = array(
		"PORTERO"=>"DIEGO ALVES",
		"DEFENSA 1"=>"CANCELO",
		"DEFENSA 2"=>"VEZO",
		"DEFENSA 3"=>"SANTOS",
		"DEFENSA 4"=>"MUSTAFI",
		"CENTROCAMPISTA 1"=>"FEGHOULI",
		"CENTROCAMPISTA 1"=>"PAREJO",
		"DELANTERO 1"=>"NEGREDO",
		"DELANTERO 2"=>"PACO ALCÁCER",
		"DELANTERO 3"=>"PIATTI",
		"DELANTERO 4"=>"BAKKALI"
		);

equipo($jugadores);
	

?>