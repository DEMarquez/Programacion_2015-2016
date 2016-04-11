<?php
	
	
	function multiRusa($a,$b){
		$producto=0;
		echo "A ---------------------- B ---------------- Producto</br>";
		echo "------------------------------------------</br>";
		while ($a >0) {
			if ($a%2!=0) {
				$producto=$producto+$b;
			}
			echo " $a ------------------ $b --------------- $producto</br>";
			$a=(int)($a/2);
			$b=$b*2;
		}
	}
	multiRusa(543,12);


?>