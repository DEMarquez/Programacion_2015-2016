<?php

	$empresa[0]["nombre"]= "ventas";
	$empresa[0]["numEmpleados"]="15";

	$empresa[1]["nombre"]= "internacional";
	$empresa[1]["numEmpleados"]="3"; 

	$empresa[2]["nombre"]= "validacion";
	$empresa[2]["numEmpleados"]="5"; 

	$empresa[3]["nombre"]= "produccion";
	$empresa[3]["numEmpleados"]="14";

	$empresa[4]["nombre"]= "diseño";
	$empresa[4]["numEmpleados"]="4"; 

	function recorre1($empresa){
		foreach ($empresa as $departamento => $emp) {
			echo "$departamento";
			foreach ($emp as $key => $value) {
				echo "$key : $value <br>";
			}
		}
	}

	function recorre2($empresa){
		do {
			$empleados=current($empresa);
			$departamento=key($empresa);
			echo "$departamento";
			do {
				$valor=current($empleados);
				$clave=key($empleados);
				echo "$valor : $clave <br>";
			} while (next($empleados));
		} while (next($empresa));
	}

	function recorre3($empresa){
		end($empresa);
		do {
			$empleados=current($empresa);
			$departamento=key($empresa);
			echo "$departamento";
			do {
				$valor=current($empleados);
				$clave=key($empleados);
				echo "$valor : $clave <br>";
			} while (next($empleados));
		} while (prev($empresa));
	}

	function recorre4($empresa){
		while ( $item=each($empresa)) {
			$fila=$item["value"];
			while ( $item2=each($fila)) {
				echo "$item2[value]";
			}
			echo "<br>";
		}
	}

echo "<h2>foreach</h2>";
recorre1($empresa);

echo "<br>";

echo "<h2>do while</h2>";
recorre2($empresa);

echo "<br>";

echo "<h2>do while inverso</h2>";
recorre3($empresa);

echo "<br>";

echo "<h2>while each</h2>";
recorre4($empresa);

?>