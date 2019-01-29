<?php
/* incluimos los datos de conexión al servidor MySQL */
include("mysqli.inc.php");
/* Programación orientada a objetos */
$c=new mysqli($cfg_servidor,$cfg_usuario,$cfg_password,'biblioteca');
if(!$c->connect_errno){
print "<br>La conexión con el servidor de bases de datos utilizando objetos se ha
realizado<br>";
}else{
print "<br>No ha podido realizarse la conexión mediante objetos<br>";
print "<i>Error de conexión número:</i> ". $c->connect_errno." <i>equivalente a:</i> ".$c->connect_error;
exit();
}

$v1 = $_POST["dni"];
$v2 = $_POST["nombre"];
$v3 = $_POST["apellido1"];
$v4 = $_POST["apellido2"];


$sentencia="INSERT INTO usuarios (dni,nombre,apellido1,apellido2) VALUES
('$v1','$v2','$v3','$v4')";

$c->query($sentencia);

if($c->close()){
print "<br>Se ha cerrado la conexión, utilizando objetos, con el servidor de bases de datos<BR>";
}
?>