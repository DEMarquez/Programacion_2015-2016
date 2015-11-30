<?php

	function media($v){

		$suma=0;
		$media=0;
		$contador=0;

		for ($i=0; $i < sizeof($v) ; $i++) { 
			echo "Valor de la posicion ".$i." : ".$v[$i]."</br>";
			if ($v[$i]>=0) {
				$suma=$suma+$v[$i];
				$contador++;
			}elseif($v[$i] == -1){
				break;
			}
		}
		if($contador == 0){
			echo "No puede calcular la media";
			return -1;
		}
		$media=$suma/$contador;
		//echo "$media";
		return $media;
	}	
	$func=media(array(2,2,1,4,5,-6));
	echo $func;	
	
?>