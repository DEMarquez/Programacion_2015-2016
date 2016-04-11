<html>
	<body>
		<?php
		if (empty($_POST)) {
		
			echo '
				<form action="ejercicio3.php" method="post">
					Introduzca la secuencia de temperaturas:<br>
					<textarea name="temperatura">78,60,62,68,71,68,73,85,66,64,76,63,81,76,73,68,72,73,75,65,74,63,67,65,64,68,73,75,79,73</textarea>
					<br>
					<input type="submit" value="Submit"/>
				</form>
			';

			}else{
				$suma=0;
				$tempMedia=0;
				$tempBaja=$temp[0];
				$tempAlta=0;
				$temp=explode(",", $_POST["temperatura"]);

				for ($i=0; $i < sizeof($temp); $i++) { 
					
					$suma=$suma+$temp;
					$tempMedia=$suma/$i;
					echo "La temperatuda media es: $tempMedia";

					if ($temp < $tempBaja) {
						$tempBaja=$temp;
						echo"$tempBaja";

					}
					if ($temp > $tempAlta) {
						$tempAlta=$temp;
						echo"$tempAlta";
					}

				}
				

			}
		?>
	</body>
</html>		