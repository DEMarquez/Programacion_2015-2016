<?php

$color = array('white', 'green', 'red');

	function recorre($color){
		foreach ($color as $indice => $valor) {
			echo "$indice : $valor <br> ";
		}
		echo "<br>";
	}


echo "<h2>ordenacion asort</h2> <br>";
asort($color);
recorre($color);

?>