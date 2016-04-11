<?php
echo "hoy es <B>";
$dia = date("D");

switch ($dia) {
	case 'Mon':
		echo "Lunes";
		break;
	case 'Tue':
		echo"Martes";
		break;
	case 'Wed':
		echo "Miercoles";
		break;
	case 'Thu':
		echo "Jueves";
		break;
	case 'Fri':
		echo "viernes";
		break;
	case 'Sat':
		echo "Sabado";
		break;
	
	default:
		echo "Domingo";
		break;
}

?>