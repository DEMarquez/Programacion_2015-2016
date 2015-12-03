<?php
	
	$suma=1;

	echo "La suma de los 10 primeros números es: <br/>";
	echo "1";

	for($i=2;$i<=10;$i++){
		
		echo " + $i ";

		$suma=$suma+$i;
		
	}

	echo "= $suma";
?>