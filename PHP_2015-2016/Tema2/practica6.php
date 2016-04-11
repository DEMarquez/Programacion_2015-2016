<html>
<head>
	<title>Practica 6</title>
</head>
<body>
	<h2>horario</h2>
<p>
	<?php
	
	$hora=date("H");
	echo "$hora <br/>";
	if ($hora <= 10) {
		echo "buenos dias por la mañana";
	}elseif ($hora <= 20 && $hora > 10) {
		echo "buenos dias";
	}else{
		echo "buenas noches";
	}

	?>
</p>
</body>
</html>