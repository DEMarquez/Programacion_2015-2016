<html>
<head>
	<title>Practica 21</title>
</head>
<body>
	<h2>Estructura de control Bucle:</h2>
<p>
	<?php

		$vectorCompras = array(30, 45, 20, 50, 15);
		$limiteCredito = 50;
		$sumaCompras = 0;
		$n = sizeof($vectorCompras);
		
		for ($i=0; $i <$n ; $i++) { 
			
			$sumaCompras=$sumaCompras+$vectorCompras[$i];
		
		}

		$i=$i-1;/*le restamos una posicion tambien
		se puede con $i=$n-1;*/
		echo "Ha comprado: $sumaCompras <br/>";
		echo "Tiene un limite de Credito de: $limiteCredito <br/>";

		do {
				
			echo "Has alcanzado el límite de tu crédito,
			el último item de tu compra va a ser eliminado
			($vectorCompras[$i])<br/>";

			$sumaCompras=$sumaCompras-$vectorCompras[$i];
			
			echo "Tu total de compras asciende a $sumaCompras <br/>" ;
			$i--;/*contador negativo otra forma
			 de hacerlo le restamos posiciones al vector*/
		} while ($sumaCompras > $limiteCredito);

	?>
</p>
</body>
</html>