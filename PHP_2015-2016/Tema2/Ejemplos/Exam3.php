<?php
	
	$v = array(1,4,7,8,34);
	$suma=0;
	$media=0;

	for($i=0;$i<5;$i++){

		$suma=$suma+$v[$i];
		
	}
	$media=$suma/$i;
	echo "la media del vector es: $media";
?>