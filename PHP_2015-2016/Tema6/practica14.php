<?php
switch ($_POST["operacion"]) {
	case '+':
		echo "suma: " . $_POST["op1"]+$_POST["op2"];
		break;
	case '-':
		echo "resta: " . $_POST["op1"]-$_POST["op2"];
		break;
	case '*':
		echo "multiplicacion: " . $_POST["op1"]*$_POST["op2"];
		break;
	case '/':
		echo "division: " . $_POST["op1"]/$_POST["op2"];
	
}

?>