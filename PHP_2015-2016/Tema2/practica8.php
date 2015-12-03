<html>
<head>
	<title>Practica 8</title>
</head>
<body>
	<h2>¿Entre semana o fin de semana?</h2>
<p>
<?php
	echo "El dia de hoy cae  <B>";
	$dia = date("D");

	switch ($dia) {
		case 'Mon':
			echo "Entre semana <br/>";
			echo "Lunes";
			break;
		
		case 'Tue':
			echo "Entre semana <br/>";
			echo "Martes";
			break;
		
		case 'Wed':
				echo "Entre semana <br/>";
				echo "Miercoles";
				break;

		case 'Thu':
				echo "Entre semana <br/>";
				echo "Jueves";
				break;

		case 'Fri':
				echo "Entre semana <br/>";
				echo "Viernes";
				break;
		case 'Sat':
				echo "En fin de semana <br/>";
				echo "Sabado";
				break;

		default:				
				echo "En fin de semana <br/>";
				echo "Domingo";
				break;
	}

?>
</p>
</body>
</html>