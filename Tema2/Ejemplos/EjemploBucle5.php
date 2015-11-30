<html>
<head>
	<title></title>
</head>
<body>
	<h2></h2>
<p>
	<?php

		$suma=0;
		$v= array(2,7,15,7,20,7);
		$n=sizeof($v);
		$contador=0;
		$media=0;
		
		for ($i=0; $i < $n ; $i++) { 
				
			if ($v[$i] == 7) {
					
					$contador = $contador +1;/*El contador nos
					 sirve para contar las veces que se repite
					  la condicion se apunta para despues poder
					   dividir para sacar la media
					   tambien sirve $contador++;*/
				}	

			}
			
		echo "<b>Cuantas veces se repite el numero 7
		 en el vector?</b>: $contador";

?>
</p>
</body>
</html>