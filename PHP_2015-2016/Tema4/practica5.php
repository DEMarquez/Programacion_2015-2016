<?php

		function equipo($jugadores){
		foreach ($jugadores as $indice => $jugador) {
			echo $indice." - ";
			echo  $jugador."</br>";
		}
	}

	$jugadores = array(

				"portero"=>"Diego alves", 
				"Defensa 1"=>"Cancelo",
				"Defensa 2"=>"Vezo",
				"Defensa 3"=>"Santos",
				"Defensa 4"=>"Mustafi",
				"CentroCampista 1"=>"Feghouli",
				"CentroCampista 2"=>"Parejo",
				"Delantero 1"=>"Negredo",
				"Delantero 2"=>"Paco Alcacer",
				"Delantero 3"=>"Piatti",
				"Delantero 4"=>"Bakkali"

				);
	
	equipo($jugadores);


?>