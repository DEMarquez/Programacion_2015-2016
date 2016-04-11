<?php
	
	function recorre($numero){
	
		foreach ($numero as $indice => $valor) {
			echo "$indice: $valor </br>";
		}
	}
	$numero = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";

	$temp=explode(",", $numero);
	//recorre ($temp);
	$suma=0;
	
	for ($i=0; $i < sizeof($temp); $i++) { 
		$suma=$suma+$temp[$i];
	}
	$media=$suma/sizeof($temp);
	echo "La media es " . $media . "</br>";

	asort($temp); 
	//recorre ($temp);

	arsort($temp);
	recorre ($temp);
?>