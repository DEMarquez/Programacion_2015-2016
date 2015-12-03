<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>
<title>Practica 16</title>
</head>
<body>
<h2>Número de semanas, días y horas equivalentes</h2>
	<?php
		
	define ("totalHoras", 1000);
	define ("dias", 24);
	define ("semanas", 168);

	define ("mensaje", "Este es el numero de semanas dias y horas equivalentes: ");

	echo mensaje;
	$semana = (int)(totalHoras / semanas);
	$restoSemana = totalHoras % semanas;
	$dia = (int)($restoSemana / dias);
	$restoDia = $restoSemana % dias;

	

	echo "Semanas $semana, Dias $dia, Horas $restoDia"; 



	?>
</body>
</html>