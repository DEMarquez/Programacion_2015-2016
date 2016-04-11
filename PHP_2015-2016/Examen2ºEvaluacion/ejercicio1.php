<html>
	<body>
		<?php
		if (empty($_POST)) {
		
			echo '
				<form action="ejercicio1.php" method="post">
					 Operando1: <input type="text" name="op1"/><br>
					 Operando2: <input type="text" name="op2"/><br>

					 selecciona que operacion/es quieres realizar:<br><br>
					 <input type="checkbox" name="operacion[]" value="suma"/> Suma<br>
					 <input type="checkbox" name="operacion[]" value="resta"/> Resta<br>
					 <input type="checkbox" name="operacion[]" value="multiplicacion"/> Multiplicacion<br>
					 <input type="checkbox" name="operacion[]" value="division"/> Division<br>
					<br><br>
					<input type="submit" value="Submit"/>
				</form>
			';

			}else{

				foreach ($_POST["operacion"] as $key => $value) {
					
					switch ($value) {
					case 'suma':
						$res=$_POST["op1"]+$_POST["op2"];
						echo "la suma es: " . $res . "<br>";
						break;

					case 'resta':
						$res=$_POST["op1"]-$_POST["op2"];
						echo "la resta es: " . $res . "<br>";
						break;

					case 'multiplicacion':
						$res=$_POST["op1"]*$_POST["op2"];
						echo "la multiplicacion es: " . $res . "<br>";
						break;

					case 'division':
						$res=$_POST["op1"]/$_POST["op2"];
						echo "la division es: " . $res . "<br>";
						break;
					
					}

					if ($_POST["operacion"] == false) {
						echo "no as seleccionado ningun campo";
					}
				}
			}
		?>
	</body>
</html>		