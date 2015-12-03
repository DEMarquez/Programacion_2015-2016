<html>
<head>
	<title>Practica 31</title>
</head>
<body>
	<h2>Video Club</h2>
<p>
	<?php

		$v = array(7,2,11,15,22,1);
		$max1=$v[0];
		$max2=$v[0];
		$maxId1=0;
		$maxId2=0;
		$min=$v[0];
		$minId=0;
		$contador=0;
		$contador1=0;
		$contador2=2;
		$por=0;
		$por1=0;
		$por2=0;
		$suma=0;
		$media=0;
		
		for ($i=0; $i < 6 ; $i++) { 	
			//echo $v[$i] . "<br/>";
				$suma=$suma + $v[$i];

			if ($v[$i] > $max1) {
				
				$max2 = $max1;
				$max1 =  $v[$i];

				$maxId2=$maxId1;
				$maxId1 =$i;

			}elseif ($v[$i]>$max2) {
				$max2=$v[$i];
				$maxId2=$i;
			}
			if ($v[$i] < $min) {
				$min =  $v[$i];
				$minId=$i;

			}if ($v[$i] > 20) {
				$contador++;

			}if ($v[$i] < 5) {
				$contador1++;
			
			}if ($v[$i] >= 7 && $v[$i] <= 15) {
				$contador2++;

			}

		}
		//echo $contador;
		$por=intval($contador / $i * 100);
		$por1=intval($contador1 / $i * 100);
		$por2=intval($contador2 / $i * 100);

		$media=$suma/$i;


		echo "<b>Las mas alquiladas son $maxId1 y
		 $maxId2 <b/><br/>";

		echo "<b> La menos alquilada es $minId <b/><br/>";

		echo "<b> El porcentaje de peliculas alquiladas
		 mas de 20 veces es:<b/> " . $por . "<b>%<b/><br/>";

		echo "<b> El porcentaje de peliculas alquiladas
		 menos de 5 veces es: <b/> " . $por1 . "<b>%<b/><br/>";

		echo "<b> El porcentaje de peliculas alquiladas
		 entre 7 y 15 veces es:<b/> " . $por2 . "<b>%<b/><br/>";

		echo "<b> Media de numero de veces que se alquila
		 cada pelicula: $media <b/>" ;

	?>
</p>
</body>
</html>