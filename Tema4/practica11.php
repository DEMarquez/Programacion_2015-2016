<?php
function recorre ($color) {
 foreach ($color as $indice => $valor) {
 echo "$indice: $valor<br>";
 }
}
 $color = array("white", "green", "red");

echo "Ordenacion asort()<br>" ;
asort($color);
recorre($color);
?> 