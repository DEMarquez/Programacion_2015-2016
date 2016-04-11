<?php
function recorre ($nombres) {
 foreach ($nombres as $indice => $valor) {
 echo "$indice: $valor<br>";
 }
}
$nombres=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");


asort($nombres);
recorre($nombres);

echo "<br>";

ksort($nombres);
recorre($nombres);

echo "<br>";

arsort($nombres);
recorre($nombres);

echo "<br>";

krsort($nombres);
recorre($nombres);


