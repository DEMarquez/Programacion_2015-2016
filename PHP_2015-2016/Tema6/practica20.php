<?php

	session_start();
	session_unset();
	$_SESION["modelo"]="cougar v6";
	$_SESION["cc"]=2500;

?>

<html>
	<body>

		<center>
			<h2>TRABAJANDO CON SESIONES</h2>
			<h3>Informacion de la sesion</h3>

			<table border="1" cellpadding="2" cellspacing="4">
				<tr>
					<td>id</td>
					<td><?php echo session_id() ?></td>
				</tr>

				<tr>
					<td>Tiempo de caducidad</td>
					<td><?php echo session_cache_expire() ?></td>
				</tr>

				<tr>
					<td>Control de caché</td>
					<td><?php echo session_cache_limiter() ?></td>
				</tr>

				<tr>
					<td></td>
					<td><?php echo  ?></td>
				</tr>

				<tr>
					<td></td>
					<td><?php echo  ?></td>
				</tr>	
			</table>
		</center>
	</body>
</html>