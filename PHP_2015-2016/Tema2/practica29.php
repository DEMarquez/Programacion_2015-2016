<html>
<head>
	<title>Practica 29</title>
</head>
<body>
	<h2>¿Edad = media min y max ?</h2>
<p>
	<?php

		$v = array(15,5,20,40,65,70,12,23,2);
		$suma=0;
		$min=$v[0];
		$jovenes=0;
		$jubilados=0;
		$max=0;
		$media=0;

		for ($i=0; $i <9 ; $i++) { 
			
			$suma=$suma+$v[$i];

			if ($v[$i] > $max) {
				$max=$v[$i];
			}
			if ($v[$i] < $min) {
				$min=$v[$i];
			}

			if($v[$i] < 18){
				$jovenes++;
				
			}if($v[$i]>=65 ){
				$jubilados++;
			}

		}
		$media=$suma/$i;
		echo "La media de la edad de los asistentes es: $media <br/>" ;
		echo "La edad minima de los asistentes es: $min <br/>" ;
		echo "La edad maxima de los asistentes es: $max <br/>";
		echo "hay $jovenes jovenes asistiendo al acto <br/>";
		echo "hay $jubilados jubilados asistiendo al acto";
	?>
</p>
</body>
</html>