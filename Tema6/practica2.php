<?php

	function recorre($v){
		foreach ($v as $indice => $valor) {
		echo "$indice : $valor <br>";
		}

	}

if (!empty($_GET)) {
			echo "Mostrando post <br>";
			recorre($_POST);
		}else{
			echo "Mostrando get <br>";
			recorre($_GET);
		}
?>