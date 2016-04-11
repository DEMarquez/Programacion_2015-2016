<?php

	$selecOp=$_POST["operacion"];

				foreach ($selecOp as $key => $value) {
					
					switch ($value) {
					case 'suma':
						echo "la suma es: " . $_POST["op1"]+$_POST["op2"];
						break;

					case 'resta':
						echo "la resta es: " . $_POST["op1"]-$_POST["op2"];
						break;

					case 'multiplicacion':
						echo "la multiplicacion es: " . $_POST["op1"]*$_POST["op2"];
						break;

					case 'division':
						echo "la division es: " . $_POST["op1"]/$_POST["op2"];
						break;
					
					default:
						echo "no as seleccionado ningun campo";
						break;
					}
				}






				


?>