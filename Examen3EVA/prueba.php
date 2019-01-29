<?php
require_once("Edificio.php");
require_once("Museo.php");
require_once("Excursion.php");


$exposicion1 = array($exposicion1,$exposicion2,$exposicion3);
$exposicion2 = array($exposicion4,$exposicion5,$exposicion6);

$anadirExpo=$Museo1 anyadirExposicion($exposicion4);

$eliminarExpo=$Museo2 eliminarExposicion($exposicion2);

$museo1=new Museo(1,"expo1","fasdfaf",1900,"alameda 25",10,1,20);

$museo2=new Museo(2,"asdasdasd","fasasdasdasddfaf",1800,"alameda 25",10,1,20);

$itinerario = array($museo1,$museo2);

$excursion = new Excursion($itinerario);
echo $excursion->toString();

?>