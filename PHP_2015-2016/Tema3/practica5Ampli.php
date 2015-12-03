<html>
<head>
	<title>Practica 5 Ampliacion</title>
</head>
<body>

	<?php
	
	
	function operaciones(){
	
	$param=func_num_args();	
	$v=func_get_args();

	$rest="<ol>";
	for ($i=0; $i < $param; $i++) { 
		$rest=$rest."<li>".$v[$i]."</li>";
	}
	$rest=$rest."</ol>";
	return $rest;
	}
			
	$n=operaciones("pollo","hola","lol","jajajajajjajaa",1);
	echo "$n";
	

	?>

</body>
</html>