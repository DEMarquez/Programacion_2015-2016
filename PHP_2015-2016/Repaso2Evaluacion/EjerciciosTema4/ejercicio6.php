<?php

	function grupo($grupos){
		foreach ($grupos as $key => $grupo) {
			foreach ($grupo as $key => $value) {
				echo " - " . $value;
			}
			echo "<br>";
		}
	}
	
	$grupos [0]["Rockband"]="Rockband";
	$grupos [0]["Song1"]="Song1";
	$grupos [0]["Song2"]="Song2";
	$grupos [0]["Song3"]="Song3";

	$grupos [1]["Rockband"]="Beatles";
	$grupos [1]["Song1"]="Love Me Do";
	$grupos [1]["Song2"]="Hey Jude";
	$grupos [1]["Song3"]="Helter Skelter";

	$grupos [2]["Rockband"]="Rolling Stones";
	$grupos [2]["Song1"]="Waiting on a Friend";
	$grupos [2]["Song2"]="Angie";
	$grupos [2]["Song3"]="Yesterday´s Papers";

	$grupos [3]["Rockband"]="Eagles";
	$grupos [3]["Song1"]="Life in the Fast Lane";
	$grupos [3]["Song2"]="Hotel California";
	$grupos [3]["Song3"]="Best of my Love";
		

grupo($grupos);
	

?>