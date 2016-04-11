<?php

	if (!isset($_POST) {
		setcookie("entorno[color_fondo]",$_POST["color_fondo"]);
		setcookie("entorno[color_plano]",$_POST["color_plano"]);
		setcookie("entorno[letra_fuerte]",$_POST["letra_fuerte"]);
		setcookie("entorno[letra_tamanyo]",$_POST["letra_tamanyo"]);
	
	

?>



<html>
	<head><title>Ejempo de formulario sencillo</title></head>
	<body>
	<center>
		<h1>Trabajando con cookies</h1><br>
		<h3>Definicion de entrono</h3><br>
		<form action="practica17.php" method="post">
			
			Color de fondo: <select name ="color_fondo">
				<option value="#FFFFFF">Blanco</option>
				<option value="#FF0202">Rojo</option>
				<option value="#0130FF">Azul</option>
				<option value="#01FF1A">Verde</option>
			</select>
			<br>
			Color de primer plano: <select name ="color_plano">
				<option value="#FFFFFF">Rlanco</option>
				<option value="#FF0202">Rojo</option>
				<option value="#0130FF">Azul</option>
				<option value="#01FF1A">Verde</option>
			</select>
			<br>
			Fuente a utilizar <select name ="letra_fuerte">
				<option value="Arial">Arial</option>
				<option value="Calibri">Calibri</option>
				<option value="Arial Black">Arial Black</option>
			</select>
			<br>
			Tamaño de la fuente: <input type="text" name="letra_tamanyo" value=""/> px<br><br>

			<input type="submit" value="Crear cookie"/>
			<input type="submit" value="Restablecer"/>
		</form>
	</center>
	</body>
</html>

<?php

}else{
	
}

?>