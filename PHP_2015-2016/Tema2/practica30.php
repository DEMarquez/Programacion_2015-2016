<html>
<head>
	<title>Practica 30</title>
</head>
<body>
	<h2>Aprobado suspendido o condicionado</h2>
<p>
	<?php

		$v = array(10,5,7,2,3,4);
		$aprobado=0;
		$suspendido=0;
		$condicionado=0;
		

		for ($i=0; $i <6 ; $i++) { 
			

			if($v[$i] > 4 ){
				$aprobado++;
			}if($v[$i] < 4 ){
				$suspendido++;
			}if($v[$i] ==  4 ){
				$condicionado++;
			}

		}
		
		echo "Alumnos aprobados $aprobado <br/>";
		echo "Alumnos suspendidos $suspendido <br/>";
		echo "Alumnos condicionados $condicionado ";
		
	?>
</p>
</body>
</html>