<?php

	function empForeach($Empresa){
		foreach ($Empresa as $departamento => $emp) {
			echo "$departamento";
			foreach ($emp as $key => $value) {
				echo " $key : $value <br>";
			}
		}
	}

	function empDoWhile($Empresa){
		do {
			$empleados=current($Empresa);
			$departamento=key($Empresa);
			echo "$departamento";
			do {
				$valor=current($empleados);
				$clave=key($empleados);
				echo " $clave : $valor <br>";
			} while (next($empleados));
		} while (next($Empresa));
	}

	function empDoWhileInverso($Empresa){
		end($Empresa);
		do {
			$empleados=current($Empresa);
			$departamento=key($Empresa);
			echo "$departamento";
			do {
				$valor=current($empleados);
				$clave=key($empleados);
				echo " $clave : $valor <br>";
			} while (next($empleados));
		} while (prev($Empresa));
	}

	function empWhile($Empresa){
		while ($item=each($Empresa)) {
			$fila=$item["value"];
			while ($item2=each($fila)) {
				echo "$item2[value] ";
			}
			echo "<br>";
		}

	}
	
	$Empresa[0]["Nombre"]="Ventas";
	$Empresa[0]["numTrabajadores"]="15";
	
	$Empresa[1]["Nombre"]="Internacional";
	$Empresa[1]["numTrabajadores"]="3";
	
	$Empresa[2]["Nombre"]="Validacion";
	$Empresa[2]["numTrabajadores"]="5";

	$Empresa[3]["Nombre"]="Produccion";
	$Empresa[3]["numTrabajadores"]="14";

	$Empresa[4]["Nombre"]="Diseño";
	$Empresa[4]["numTrabajadores"]="4";
	

echo "<h2>foreach</h2>";
empForeach($Empresa);

echo "<br>";

echo "<h2>do while</h2>";
empDoWhile($Empresa);

echo "<br>";

echo "<h2>do while inverso</h2>";
empDoWhileInverso($Empresa);

echo "<br>";

echo "<h2>while each</h2>";
empWhile($Empresa);


	

?>