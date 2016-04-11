<?php

/*
	echo "Variables pasadas mediante GET:<br>";
	foreach ($_GET as $indice => $valor) {
		echo "$indice : $valor </br>";
	}

	echo "Variables pasadas mediante POST:<br>";
	foreach ($_POST as $indice => $valor) {
		echo "$indice : $valor <br>";
	}

	echo "Variables pasadas mediante REQUEST:<br>";
	foreach ($_REQUEST as $indice => $valor) {
		echo "$indice : $valor <br>";
	}

	echo "Variables pasadas mediante SERVER:<br>";
	foreach ($_SERVER as $indice => $valor) {
		echo "$indice : $valor";
	}

*/
	//tambien se puede hacer asi

	function recorre($v){
		foreach ($v as $indice => $valor) {
		echo "$indice : $valor <br>";
		}
	}


	echo "Mostrando request <br>";
	recorre($_REQUEST);

	echo "Mostrando post <br>";
	recorre($_POST);

	echo "Mostrando get <br>";
	recorre($_GET);

	echo "Mostrando server <br>";
	recorre($_SERVER);

?>