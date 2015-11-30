<?php
	
	
	function operaciones(){
		
	$v=func_get_args();
	$num_v=func_num_args();
		
		
		if ($num_v == 2) {
			echo "La multiplicacion da: ";
			$op=$v[0]*$v[1];

			}elseif ($num_v == 3){
				echo "La suma da: ";
				$op=$v[0]+$v[1]+$v[2];

			}elseif ($num_v == 4) {
				echo "La media da: ";
				$op=$v[0]+$v[1]+$v[2]+$v[3];
				$media=$op/$num_v;
			}

		return $op;
	}
		
$n=operaciones(2,4,5,7);
echo "$n";
	

?>