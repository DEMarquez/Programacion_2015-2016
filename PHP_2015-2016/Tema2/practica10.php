<html>
<head>
	<title>Practica 10</title>
</head>
<body>
	<h2>Estructura de contol Bucle:</h2>
<p>
	<?php
	
		$n=1;

		echo "<table border=1>";
		for ($i=1; $i <= 10 ; $i++) { 
			echo "<tr>";
			for ($j=1; $j <= 10 ; $j++) { 
				
				echo "<td>","<b>",$n,"</b>","</td>";
				$n=$n+1;
			}

			echo "</tr>";

		}
		echo "</table>";

		
	?>
</p>
</body>
</html>