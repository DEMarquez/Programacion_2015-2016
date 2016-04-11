<?php
session_start ();
?>
<HTML>
<BODY>
<?php
$_SESSION["nombre"] = "Luis Miguel Caberas";
$_SESSION["edad"] = 29;
echo "<a href = \"practica18-2.php\">Pasar variables</a>";
?>
</BODY>
</HTML>