<?php
require_once "Empresa.class.php";

$trabajador1 = new Trabajadores("pepe",123,2,10000,"jefe");
$trabajador2 = new Trabajadores("eustaquio",234,3,10000,"jefe");
$trabajador3 = new Trabajadores("eusebio",345,1,10000,"jefe");
$trabajador4 = new Trabajadores("eusebio",346,2,10000,"jefe");

$trabajadores = array($trabajador1,$trabajador2,$trabajador3);
$Empresa = new  Empresa (5,$trabajadores);
$existe=$Empresa->existeEmpleado(123);
echo "empleado existe $existe <br>";
echo "<br>";
$Empresa->anyadirEmpleado($trabajador4);
$existe=$Empresa->existeEmpleado(346);
echo "<br>";
echo "empleado existe $existe <br>";
$listar=$Empresa->listarEmpleados();
echo "$listar <br>";
$histograma=$Empresa->toHistograma();
echo "$histograma";

?>