<?php
	function factorial($n){
		$fact=$n;
		for($i=$n - 1; $i > 0; $i--) {
			$fact=$fact*$i;
		}
		echo "$fact <br>";
	}
	factorial(5);
	factorial(7);

?>