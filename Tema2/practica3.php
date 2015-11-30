<html>
<head>
	<title>Practica 3</title>
</head>
<body>
	<h2>¿Cuál sería el diagrama de ejecución del siguiente código?</h2>
<p>
	<?php

		$first = 1;
		$second = 3;
		$isLesser = $first < $second;

		if ($isLesser) {
		echo $first . " is less than " . $second . "!";
		}

		/*No se ejecutaria se quedaria en $isLesser
		 ya que ni first ni secon tiene ($)*/

	?>
</p>
</body>
</html>