<?php
	
	echo "Nombre: " . $_POST["nombre"] . "<br>";
	echo "Edad: " . $_POST["edad"] . "<br>";
	
	if ($_POST["edad"]>18) {
		echo "Mayor de edad";
		echo "<br>";
	}else{
		echo "Menor de edad";
		echo "<br>";
	}

	echo "Tipo de estudio " . $_POST["estudio"] . "<br>";
	if ($_POST["estudio"]==1) {
		echo "No tiene estudios";
	}elseif ($_POST["estudio"]==2){
		echo " Estudios primarios";
	}else{
		echo " Estudios secundarios";
	}

	

?>