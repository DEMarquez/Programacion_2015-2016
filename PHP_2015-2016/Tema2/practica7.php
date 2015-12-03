<html>
<head>
	<title>Practica 7</title>
</head>
<body>
	<h2>Que dia de la semana es</h2>
<p>
<?php
	echo "hoy es <B>";
	$dia = date("D");

	switch ($dia) {
		case 'Mon':
			echo "Lunes";
			break;
		
		case 'Tue':
			echo "Martes";
			break;
		
		case 'Wed':
				echo "Miercoles";
				break;

		case 'Thu':
				echo "Jueves";
				break;

		case 'Fri':
				echo "Viernes";
				break;
		case 'Sat':
				echo "Sabado";
				break;

		default:				
				echo "Domingo";
				break;
	}

?>
</p>
</body>
</html>