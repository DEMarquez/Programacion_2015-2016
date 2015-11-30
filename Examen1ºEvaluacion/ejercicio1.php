<?php

$v = array(1,2,4,1,7,2,2);
$count=0;

for ($i=0; $i < sizeof($v); $i++) { 
	if ($v[$i] == 2) {
		$count++;
	}
}
echo "El numero 2 se repite: $count";


?>