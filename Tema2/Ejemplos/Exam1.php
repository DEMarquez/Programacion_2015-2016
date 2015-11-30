<?php
	
	$edad=25;

	if ($edad >=0 && $edad < 17) {
		echo "La persona es menor de edad";
	}elseif ($edad >17 && $edad < 65) {
		echo "La persona es mayor de edad";
	}else  {
		echo "La persona es mayor de edad y jubilada";
	}
?>