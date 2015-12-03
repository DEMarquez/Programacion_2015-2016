<?php
	function operaciones($num1,$num2,$num3,$num4,$num5){
		$tmp=0;

		$tmp=$num1+$num2+$num3+$num4+$num5;
		return $tmp;
	}
	
	$tmp=operaciones (2, 5, 1, 8, 10);
	echo "La suma de los 5 numeros da $tmp";
?>