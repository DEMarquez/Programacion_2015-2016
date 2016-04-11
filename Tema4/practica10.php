<?php
function paises ($pais) {
 foreach ($pais as $indice => $valor)
 echo "$indice: $valor<br>";
}
$pais = array("Albania" => "Tirana","Alemania" => "Berlin", "Andorra" => "Andorra la Vieja","Austria" => "Viena");

paises($pais);
echo "<br>";
paises(array_flip($pais));
?>