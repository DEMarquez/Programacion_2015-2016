<?php

	$cadenas = array("Andalucía","Aragón","Principado de Asturias","Baleares","Canarias","Cantabria","Castilla-La Mancha","Castilla y León","Cataluña","Extremadura","Galicia","La Rioja","Comunidad de Madrid","Región de Murcia","Comunidad Foral de Navarra","País Vasco","Comunidad Valenciana");

	$maxlong=0;
	$minlong=strlen($cadenas[0]);
	$nomComMax=0;
	$nomComMin=$cadenas[0];
	$posMax=0;
	$posMin=0;

	for ($i=0; $i <sizeof($cadenas) ; $i++) { 
		$longitudCadenas=strlen($cadenas[$i]);
		if ($longitudCadenas < $minlong) {
			$minlong=$longitudCadenas;
			$nomComMin=$cadenas[$i];
			$posMin=$i;
		}elseif ($longitudCadenas > $maxlong) {
			$maxlong=$longitudCadenas;
			$nomComMax=$cadenas[$i];
			$posMax=$i;
		}
	}

	echo "Maximo: <br>Numero caracteres: $maxlong <br> Nombre: $nomComMax <br>Posicion:$posMax	<br><br>";
	echo "Minimo: <br>Numero caracteres: $minlong <br> Nombre: $nomComMin <br>Posicion:$posMin";
?>