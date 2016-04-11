<?php

	$EU = array("Italy"=>"Rome",
				"Luxembourg"=>"Luxembourg",
				"Belgium"=> "Brussels",
				"Denmark"=>"Copenhagen",
				"Finland"=>"Helsinki",
				"France" => "Paris",
				"Slovakia"=>"Bratislava",
				"Slovenia"=>"Ljubljana",
				"Germany" => "Berlin",
				"Greece" => "Athens",
				"Ireland"=>"Dublin",
				"Netherlands"=>"Amsterdam",
				"Portugal"=>"Lisbon",
				"Spain"=>"Madrid",
				"Sweden"=>"Stockholm",
				"United Kingdom"=>"London",
				"Cyprus"=>"Nicosia",
				"Lithuania"=>"Vilnius",
				"Czech Republic"=>"Prague",
				"Estonia"=>"Tallin",
				"Hungary"=>"Budapest",
				"Latvia"=>"Riga",
				"Malta"=>"Valetta",
				"Austria" => "Vienna",
				"Poland"=>"Warsaw");
	
	function recorre($EU){
		foreach ($EU as $indice => $valor) {
			echo "$indice : $valor <br> ";
		}
		echo "<br>";
	}

echo "<h2>ordenacion krsort</h2> <br>";
ksort($EU);
recorre($EU);


echo "<h2>ordenacion asort</h2> <br>";
asort($EU);
recorre($EU);

?>