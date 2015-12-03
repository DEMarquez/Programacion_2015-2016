<meta http-equiv="Content-Type"content="text/html;charset=UTF-8" />
<head><title>Empezando con php …</title></head>
<body>
<h2>Funciones de Usuario </h2>
	<?php
		define("Fin_Cuenta",0);
		$mifinal=3;
		function cuentaAtras($inicio, &$fin, $mensaje="¡Booom!"){
			for(;$inicio>$fin;$inicio--){
				echo $inicio, " ... <br>";
			}
			$fin=$fin+2;
			echo $mensaje;
			}
	?>
<table border="0" cellpadding="4" cellspacing="6">
	<tr align="center">
		<td bgcolor="#FFBBAA">
		<?php
			//$mifinal vale 3
			cuentaAtras(6, $mifinal);
			//$mifinal vale 5
		?>
		</td>
		<td bgcolor="#FFFBAD">
		<?php
			//$mifinal vale 5
			cuentaAtras(8, $mifinal, "¡Despierta!");
			//$mifinal vale 7
		?>
		</td>
	</tr>
</table>
</body>
</html>