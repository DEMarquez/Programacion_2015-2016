<?php
	function operaciones($op1,$op2,$op){
		$res=0;
		switch ($op) {
			case '+':
				$res=$op1+$op2;
				echo "resultado $res <br/>";
				break;
			case '-':
				$res=$op1-$op2;
				if ($res<0) {
					echo "Resultado negativo <br/>";
				}
				echo "Resultado $res<br/>";
				break;
			case '*':
					$res=$op1*$op2;
					echo "Resultado $res <br/>";
				break;
			case '/':
					$res=$op1/$op2;
					echo "Resultado $res <br/>";
					break;	
			default:
				echo "Caracter erroneo <br/>";
				break;
		}
	}
	
	operaciones (10,2,'+');
	operaciones (10,2,'-');
	operaciones (2,10,'-');
	operaciones (10,2,'*');
	operaciones (10,2,'/');
?>