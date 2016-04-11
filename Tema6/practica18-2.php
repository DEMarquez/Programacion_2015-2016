<?php
session_start();
echo '
<HTML>
<BODY>';

echo "Mostrar identificador y nombre<br>";
echo $_SESSION["nombre"] . $_SESSION["edad"];
echo '
</BODY>
</HTML>';
?>