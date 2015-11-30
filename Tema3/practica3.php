<html>
	<head> 
		<title>Empezando con php …</title>
	</head>
	<body>
		<h2>Funciones de Usuario </h2>
		<?php
			function cuentaAtras($inicio){
				for($i=$inicio;$i>0;$i--){
				echo $i, " ... <br>";
				}
			echo "¡ Booooom !";
			}
		?>
	<table border="0" cellpadding="4" cellspacing="6">
		<tr align="center">
		<td bgcolor="#FFBBAA">
			<?php
				cuentaAtras(8);
			?>
		</td>
		<td bgcolor="#FFFBAD">
			<?php
				cuentaAtras(5);
			?>
		</td>
		</tr>
	</table>
	</body>
</html>