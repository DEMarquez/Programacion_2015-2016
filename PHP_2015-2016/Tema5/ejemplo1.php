<html>
<head>
<title>Trabajando con cadenas</title>
<body>
<center>
<h2>Función <i>printf</i></h2>
<?php
$euro=166.386;
$anyo=2002;
$mes=9;
$dia=23;
printf("%s--- %02d/%02d/%04d ---</b><br><br>",
"<b>Convertidor de Euros ", $dia, $mes, $anyo);
for($i=100;$i<1100;$i+=100){
printf("%4d Ptas. -> %02.2f euros%s",
$i, $i/$euro, "<br>");
}
?>
</center>
</body>
</html>