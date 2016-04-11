<?php
	function operaciones($num1,$num2,$op){
		$res=0;
		
			if ($op == '+') {
				$res=$num1+$num2;
				echo "La suma da de resultado $res <br/>";
			}elseif ($op == '-') {
				$res=$num1-$num2;
				echo "La resta da de resultado $res <br/>";
			}elseif ($op == '*') {
				$res=$num1*$num2;
				echo "La multiplicacion da de resultado $res <br/>";
			}elseif ($op == '/') {
				$res=$num1/$num2;
				echo "La division da de resultado $res <br/>";
			}
	}
	
	operaciones (6.5,6.5,'+');
	
?>