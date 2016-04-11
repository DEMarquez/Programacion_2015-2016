<?php

	$cadenas = array("Andalucía","Aragón","Principado de
Asturias","Baleares","Canarias","Cantabria","Castilla-La
Mancha","Castilla y León","Cataluña","Extremadura","Galicia","La
Rioja","Comunidad de Madrid","Región de Murcia","Comunidad Foral
de Navarra","País Vasco","Comunidad Valenciana");
	$maxLong=0;
	$minLong=strlen($cadenas[0]);
	$nomComMax="";
	$nomComMin=$cadenas[0];
	$maxPos=0;
	$minPos=0;
	for ($i=0; $i < sizeof($cadenas); $i++) {
		$longitudCadena=strlen($cadenas[$i]);
		if ($longitudCadena<$minLong) {//sacamos comunidad min
			$minLong=$longitudCadena;
			$nomComMin=$cadenas[$i];
			$minPos=$i;
		}elseif ($longitudCadena>$maxLong) {//sacamos comunidad max
			$maxLong=$longitudCadena;
			$nomComMax=$cadenas[$i];
			$maxPos=$i;
		}
	}
	echo "Maximo: <br>Numero caracteres: $maxLong <br> Nombre: $nomComMax <br>Posicion: $maxPos	<br><br>";
	echo "Minimo: <br>Numero caracteres: $minLong <br> Nombre: $nomComMin <br>Posicion: $minPos";

?>