<?php
		
	function operaciones(){
		
		$v=func_get_args();
		$v_num=func_num_args();

		if ($v_num == 2) {
			echo "La multiplicacion da: ";
			$op=$v[0]*$v[1];
		}elseif ($v_num == 3) {
			echo "La suma da: ";
			$op=$v[0]+$v[1]+$v[2];
		}elseif ($v_num == 4) {
			echo "El promedio da: ";
			$suma=$v[0]+$v[1]+$v[2]+$v[3];
			$op=$suma/$v_num;
		}
		return $op;
	}

	$n=operaciones(2,10,2,10);
	echo "$n";
?>