<?php
session_start();
session_name();
?>
<HTML>
<center>	
		<h2>TRABAJANDO CON SESIONES</h2>
			<h3>Informacion de la sesion</h3>
<BODY>
<?php
	if (!isset($_SESSION["contador"])) {
		$_SESSION["contador"]=1;
	}else{
		$_SESSION["contador"]=$_SESSION["contador"]+1;
	}
	echo "contador " . $_SESSION["contador"] . "<br>";

	$id=session_id();
	echo "Identificador de sesion " . $id . "<br>";

	$name=session_name("sesionDani");
	$nameNuevo= session_name();
	echo "Nombre de la sesion anterior " . $name . "<br>";
	echo "Nombre de la nueva sesion " . $nameNuevo . "<br>";

?>
<a href= "practica19.php">Actualizar</a>
<a href= "practica19-2.php">Resetear contador</a>
</center>
</BODY>
</HTML>