<?php

$paises = array(
			"Albania" => "Tirana",
			"Alemania" => "Berlin",
			"Andorra" => "Andorra la Vieja",
			"Austria" => "Viena",
			"Belgida" => "Bruselas",
			"Bielorrusia" => "Minsk",
			"Bosnia y Herzegovina" => "Saragevo",
			"Bulgaria" => "Sofia",
			"Ciudad del Vaticano" => "Ciudad del Vaticano",
			"Croacia" => "Zagreb",
			"Dinamarca" => "Copenhague",
			"Eslovaquia" => "Bratislava",
			"Eslovenia" => "liubliana",
			"España" => "Madrid",
			"Estonia" => "Tallin",
			"Finlandia" => "Helsinki");

	function pais($paises){
		foreach ($paises as $indice => $valor) {
			echo "$indice : $valor <br> ";
		}
		echo "<br>";
	}


echo "<h2>vector normal</h2> <br>";
pais($paises);

echo "<br>";

echo "<h2>paises intercambiados por array_flip</h2> <br>";
pais(array_flip($paises));


?>