<?php
	
	function mayor($num1,$num2,$num3){
		 
		if ($num1 > $num2 && $num1 > $num3) {
			$resultado=$num1;
			//echo "El Mayor es: $num";
		}elseif ($num2 > $num1 && $num2 > $num3) {
			$resultado=$num2;
			//echo "El Mayor es: $num1";
		}else{
			$resultado=$num3;
			//echo "El Mayor es: $num2";
		}

	return $resultado;
	}

	$res=mayor(100,158,700);
	echo"El mayor es: $res";
?>