<?php
session_start();
?>
<HTML>
<BODY>
<?php
$_SESSION["nombre"] = "Daniel Espi ";
$_SESSION["edad"] = 24;
?>
<a href= "practica18-2.php">Pasar variables</a>
</BODY>
</HTML>