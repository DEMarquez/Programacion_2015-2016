<?php
function bisiesto_No($año){

	if(($año % 4==0)&&($año % 100!=0)||($año % 400==0)){
 		echo "Año bisiesto: $año";
		}else{
 			echo "No es un año bisiesto: $año";
 		}
}
bisiesto_No(1991);
?>