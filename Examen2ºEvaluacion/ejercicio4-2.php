<?php

				$cadena=$_POST["texto"];
				$cadena2=$_POST["buscar"];
				

				$cadenas=substr_count($cadena, $cadena2);
				if (isset($_POST["texto"])) {
				

					echo "La palabra bla se repite: " . substr_count($cadena, $cadena2) . " veces";
				}else{
					echo "no aparece ninguna vez";
				}

?>