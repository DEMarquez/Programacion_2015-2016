<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>
<title>Practica 13</title>
</head>
<body>
<h2>Detecta los 7 errores</h2>
	<?php

 		$x = -1;
		$y = 9;
		$suma = $x + $y;
		print("El valor de x es <i>$x</i><br />");
		print("El valor de y es <i>$y</i><br />");
		print("La suma es <b><i>$suma</i></b><br />");
	
	/* El <br> de fuera de el print esta mal puesto la etiqueta <i> del primer print no esta cerrada ademas le falta cerrar el print con (;).
		En el segundo print le falta cerrar el parentesis
		En $suma = $x + $y faltan los dos ($) sin ellos no se puede realizar la suma*/

	 ?>
	


</body>
</html>