<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>
<title>Practica 10</title>
</head>
<body>
<h2>Salario del trabajador</h2>
	<?php
		 
		define ("salario", 3500);
		define ("impuesto", 0.20);
		define("mensaje", " Este es el salario de este trabajador: ");
		
		echo mensaje;
		$multi = salario * impuesto;
		$total = salario - $multi;

		echo "$total";

		
	?>
</body>
</html>