<?php

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
	
	function recorrido_whileEach($Empresa){
	while ($item=each($Empresa)) {
		$fila=$item["value"];
		while ($item2=each($fila)) {
			echo "$item2[value] " ;
		}
		echo "</br>";
	}
}

	function recorrido_foreach($Empresa){
		foreach ($Empresa as $departamento => $fila) {
			echo " $departamento";
			foreach ($fila as $key => $value) {
				echo " $key : $value </br>";
				
			}
			echo "</br>";
		}
	}

	function recorrido_funciones($Empresa){
		do {
			$empleados=current($Empresa);
			$departamento=key($Empresa);
			echo "$departamento";
			do {
			$valor=current($empleados);
			$clave=key($empleados);
			echo " $clave : $valor </br>";
			} while (next($empleados));
		} while (next($Empresa));
	}

	function recorrido_funcionesInverso($Empresa){
		end($Empresa);
		do {
			$empleados=current($Empresa);
			$departamento=key($Empresa);
			echo " $departamento";
			
			do {
			$valor=current($empleados);
			$clave=key($empleados);
			echo " $clave: $valor </br>";
			} while (next($empleados));
		} while (prev($Empresa));
	}	

/*

	maneras de recorrer el array

	$emp = array("Ventas" => 15,
				"Internacional"=> 3,
				"Validacion" => 5,
				"Proteccion" => 14,
				"Diseño" => 4);

	function recorrido_foreach($emp){
		foreach ($emp as $departamentos => $empleados) {
			echo " $departamentos: $empleados </br>";	
		}
	}

	function recorrido_whileEach($emp){
		while ($item=each($emp)) {
			echo "$item[0] :  $item[1]</br>";
		}
	}

	function recorrido_funciones($emp){
		do {
			$empleados=current($emp);
			$departamento=key($emp);
			echo " $departamento: $empleados </br>";

		} while (next($emp));
	}

	function recorrido_funcionesInverso($emp){
		end($emp);
		do {
			$empleados=current($emp);
			$departamento=key($emp);
			echo " $departamento: $empleados </br>";

		} while (prev($emp));
	}

*/


	echo "<b>Foreach</b> </br>";
	echo "</br>";
	recorrido_foreach($Empresa);
	echo "</br>";	

	echo "<b>While Each</b> </br>";
	echo "</br>";
	recorrido_whileEach($Empresa);
	echo "</br>";

	echo "<b>Funciones</b> </br>";
	echo "</br>";
	recorrido_funciones($Empresa);
	echo "</br>";	

	echo "<b>FuncionesInverso</b> </br>";
	echo "</br>";
	recorrido_funcionesInverso($Empresa);
	echo "</br>";	

	
?>