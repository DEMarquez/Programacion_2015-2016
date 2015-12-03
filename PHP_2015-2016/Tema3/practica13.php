<?php
	$inicio=9;
	$final=0;
	function cuentaAtras(){
	global $final;
	$inicio=7;
	static $num=0;
	for(;$inicio>$final;$inicio--){
		echo $inicio, " ... <br>";
	}
	$num++;
	echo "¡Booooooom -$num-!";
}
?>

<table border="0" cellpadding="4" cellspacing="6">
	<tr align="center">
		<td bgcolor="#FFBBAA">
		<?php
			cuentaAtras();
			//$num vale 1
		?>
		</td>
		<td bgcolor="#FFFBAD">
		<?php
			cuentaAtras();
			//$num vale 2
		?>
		</td>
	</tr>
</table>