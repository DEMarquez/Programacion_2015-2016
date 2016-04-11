<html>
	<head> 
		<title>Empezando con php …</title>
	</head>
	<body>
		<h2>Funciones de Usuario </h2>
		<?php
			define("Fin_cuenta", 0)
			$mifinal=3;
			function cuentaAtras($inicio, $fin){
				for($inicio=$fin; $inicio>$fin; $inicio--){
				echo $inicio, " ... <br>";
				}
			echo "¡ Booooom !";
			}
		?>
	<table border="0" cellpadding="4" cellspacing="6">
		<tr align="center">
		<td bgcolor="#FFBBAA">
			<?php
				cuentaAtras(11,$mifinal);
			?>
		</td>
		<td bgcolor="#FFFBAD">
			<?php
				cuentaAtras(8,Fin_cuenta);
			?>
		</td>
		</tr>
	</table>
	</body>
</html>