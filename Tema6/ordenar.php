<?php
	if (isset($_POST["criterio"])) {
		//mostrare pagina "se han establecido las cookies"
		setcookie("criterio",$_POST["criterio"]);
		?>
		<html>
		<body>
			<h2>Ordenar temperaturas</h2>
			<a href="ordenar.php">Volver</a>
		</body>
		</html>
	<?php	
	}else{
		//mostrare el formulario
	?>
		<html>
			<form action="ordenar.php" method="post">
			<?php
			$texto="78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
			//caso EXISTE LA COOKIE criterio
			if(isset($_COOKIE["criterio"])){
				$textoArray=explode(",", $texto);
				if($_COOKIE["criterio"]=='ascendente'){
					asort($textoArray);		
				}else{
					rsort($textoArray);
				}

				$texto=implode(",", $textoArray);
				echo'<textarea cols=20 rows=6 name="info">' . $texto . '</textarea>';

			}else{//caso NO EXISTE LA COOKIE criterio
				echo'<textarea cols=20 rows=6 name="info">' . $texto . '</textarea>';
			}	
				
			?>
				<br><br>

				<select name ="criterio">
					<option value="ascendente">ascendente</option>
					<option value="descendente">descendente</option>
				</select>
				<br><br>

				<input type="submit" value="Enviar"/><br><br>

				<a href ="resetearCookies.php">Resetear Cookies</a>
			</form>
		</html>
	<?php
	}
	?>		
