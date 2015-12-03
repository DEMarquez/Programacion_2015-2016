<html>
<head>
	<title></title>
</head>
<body>
	<h2></h2>
<p>
	<?php

		$suma=0;
		$v= array(2,7,15,3,20,6);
		$n=sizeof($v);
		$contador=0;
		$media=0;
		
		for ($i=0; $i < $n ; $i++) { 
				
			if ($v[$i] >= 7 && $v[$i] <= 17) {
					
					$suma=$suma+$v[$i];
					$contador = $contador +1;/*El contador nos
					 sirve para contar las veces que se repite
					  la condicion se apunta para despues poder
					   dividir para sacar la media*/

				}	

			}
			$media=$suma/$contador;
		echo "<b>La media es</b>: $media";

?>
</p>
</body>
</html>