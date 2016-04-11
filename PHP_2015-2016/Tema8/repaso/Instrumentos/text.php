<?php

/*GuitarraElectrica GuitarElectric = new GuitarraElectrica("Guitarra", 6);
		BajoElectrico DownElectric = new BajoElectrico("Bajo", 4);
		
		GuitarElectric.tocar();
		DownElectric.tocar();*/
require_once ("guitarraElect.class.php");
require_once ("bajo.class.php");

$GuitarElectric = new GuitarraElect("Guitarra", 6);
$DownElectric = new BajoElectrico("Bajo", 4);
$GuitarElectric2 = new GuitarraElect("Guitarra", 7);
$DownElectric2 = new BajoElectrico("Bajo", 5);

echo $GuitarElectric->tocar();
echo "<br>";
echo $DownElectric->tocar();
echo "<br>";
echo $GuitarElectric2->tocar();
echo "<br>";
echo $DownElectric2->tocar();

?>

