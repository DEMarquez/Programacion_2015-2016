<?php

function salarioSemanal($pagos,$horas){

	$suma=0;
	$multi=0;
	$op=0;
	$incremento=0.50;

	 
		if ($horas <= 72) {
			echo "Entra dentro de la regla </br>";
			if ($horas < 40) {
				$suma=$pagos*$horas;
				//echo "Salario sin horas extra: $suma";
			}
			elseif($horas > 40){
				$multi=$horas*$pagos;
				$op=$multi*$incremento;
				$suma=$multi+$op;
				//echo "Salario con horas extra: $suma";
			}
		}else{
			echo "Entra es erronea </br>";
			return -1;
		}
		
	return $suma;
}


$fun=salarioSemanal(6,72);
echo "Se paga la semana a: $fun";


?>