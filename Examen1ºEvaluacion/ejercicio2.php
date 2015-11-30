<?php

$v = array(2,3,4,6,2,8,1);
$max=0;


for ($i=0; $i < sizeof($v); $i++) { 
	if($v[$i]%2==0){	
		if ($v[$i] > $max) {
			$max=$v[$i];
		}
	}
}
echo "el valor mas grande par es: $max";
?>