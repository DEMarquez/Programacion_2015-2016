<html>
<head>
	<title>practica 26</title>
</head>
<body>
	<h2>Estados del agua</h2>
<p>
	<?php

		
		$agua = 20;
		
		switch ($agua) {
			case '0':
				echo "el agua esta en estado solido";
				break;
			case '20':
				echo "el agua esta en estado liquida";
				break;
			case '100':
				echo "el agua esta en estado gaseoso";
				break;
			
			default:
				echo "introduce un valor que sea 0,20,100";
				break;
		}

	?>
</p>
</body>
</html>