<?php

	$info ="Beautiful mind, El padrino, The imitation game, Siete años en el tibet, Spielberg, Tim
Burton, Miller, 100, 500, 200";

	 $info=explode(",", $info);

	$peliculas=array_slice($info,0,4);

	var_dump($peliculas);

	$directores=array_slice($info,4,3);

	var_dump($directores);


	$estadisticas=array_slice($info,7,3);

	var_dump($estadisticas);

?>