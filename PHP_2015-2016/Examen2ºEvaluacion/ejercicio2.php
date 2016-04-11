<?php
					
	$cadena = ("Amelie,Gladiator,Pulp Fiction,El padrino,Peter Jackson,Steve Spielberg,Ridley Scott, Quentin Tarantino,Francis Ford Coppola,891,876,802");
	$info=explode(",", $cadena);

	$peliculas=array_slice($info, 0,4);
	echo "<b>Peliculas:</b> <br>";
	foreach ($peliculas as $key => $value) {
		echo "<ul><li>$value</li></ul>";
	}

	$directores=array_slice($info, 4,5);
	echo "<b>Directores:</b> <br>";
	foreach ($directores as $key => $value) {
		echo "<ul><li>$value</li></ul>";
	}
	

	$estadisticas=array_slice($info, 9,3);
	echo "<b>Estadisticas:</b> <br>";
	foreach ($estadisticas as $key => $value) {
		echo "<ul><li>$value</li></ul>";
	}
	
		
?>
	