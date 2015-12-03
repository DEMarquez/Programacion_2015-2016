<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>
<title>Practica 15</title>
</head>
<body>
<h2>Farenheit a Celsius</h2>
	<?php
		define("Farenheit", 50);
		define("mensaje", "Esta es la temperatura en Grados Celsius: ");

		echo mensaje;

		$resta=Farenheit-32;
		$division=$resta*5/9;

		echo "$division";
	?>
</body>
</html>