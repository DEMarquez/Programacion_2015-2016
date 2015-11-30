<html>
<head>
	<title>practica 10 Ampliacion</title>
</head>
<body>
	<h2>Histograma</h2>
<p>
	<?php

		$h = array(0,0,0,0,0,0,0,0);
		$v = array(1,5,5,4,3,4,5,5,4,1,6,7);

		for ($i=0; $i < sizeof($h) ; $i++) {
			$cont=0;
			for ($j=0; $j < sizeof($v) ; $j++) {
				if ($v[$j] == $i) {
					$cont++;
				}
			}
			$h[$i]=$cont;
		}
		/*for ($i=0; $i < sizeof($v) ; $i++) {
			$h[$v[$i]]++;

			Este for es otra forma de hacer que $h
			reciba valor es otra manera de hacer los
			 fors concatenados de arriba sin necesidad
			  de utilizar tantas sentencias
		}*/

		for ($i=0; $i < sizeof($h) ; $i++) {
			echo "<b>$i: <b/>";
			for ($j=0; $j < $h[$i] ; $j++){
				echo "<b> * <b/>";
			
			}
			echo "<br/>";
		}
			

	?>
</p>
</body>
</html>