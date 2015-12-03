<?php
	function factorial($n){
		$fact=$n;
		echo "$n! = ";
		for($i=1; $i < $n; $i++) { 
		
			$fact=$fact*$i;
			echo "$i x ";
		}
		echo "$i = $fact <br/>";
	}
	
	factorial(5);
	factorial(7);

?>