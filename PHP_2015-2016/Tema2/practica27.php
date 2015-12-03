<html>
<head>
	<title>practica 27</title>
</head>
<body>
	<h2>Nota</h2>
<p>
	<?php

		$nota=10;

		/*if ($nota >= 0 && $nota < 5) {
			echo "Estas suspendido";
			}if ($nota >= 5 && $nota < 7) {
				echo "Estas aprobado";
			}if ($nota >= 7 && $nota < 9) {
				echo "Has sacado un notable";
			}if ($nota >= 9 && $nota < 10) {
				echo "Has sacado un sobresaliente";
			}if ($nota == 10 ) {
				echo "Has sacado una matricula de honor";
			}		
		*/	

		/*	if ($nota >= 0 && $nota < 5) {
			echo "Estas suspendido";
			}elseif ($nota >= 5 && $nota < 7) {
				echo "Estas aprobado";
			}elseif ($nota >= 7 && $nota < 9) {
				echo "Has sacado un notable";
			}elseif ($nota >= 9 && $nota < 10) {
				echo "Has sacado un sobresaliente";
			}else {
				echo "Has sacado una matricula de honor";
				}
			*/	
		switch ($nota) {
			
			case '0':
			case '1':
			case '2':
			case '3':	
			case '4':
				echo "Estas suspendido";
				break;

			case '5':
			case '6':	
				echo "Estas aprobado";
				break;

			case '7':
			case '8':	
				echo "Has sacado un notable";
				break;

			case '9':
				echo "Has sacado un sobresaliente";
				break;		
			
			default:
				echo "Has sacado una matricula de honor";
				break;
		}
	?>
</p>
</body>
</html>