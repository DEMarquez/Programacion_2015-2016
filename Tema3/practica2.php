<html>
	<head> 
		<title>Empezando con php …</title>
	</head>
	<body>
		<h2>Funciones de Usuario </h2>
		<?php
			function cuentaAtras(){
				for($i=10;$i>0;$i--){
				echo $i, " ... <br>";
				}
			echo "¡ Booooom !";
			}
		?>
	<table border="0" cellpadding="4" cellspacing="6">
		<tr align="center">
		<td bgcolor="#FFBBAA">
			<?php
				cuentaAtras();
			?>
		</td>
		<td bgcolor="#FFFBAD">
			<?php
				cuentaAtras();
			?>
		</td>
		</tr>
	</table>
	</body>
</html>