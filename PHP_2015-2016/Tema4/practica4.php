<?php
/*
	$vector1[0][0]="Modelo 0";
	$vector1[0][1]="volvo";
	$vector1[0][2]="22";
	$vector1[0][3]="18";

	$vector1[1][0]="Modelo 1";
	$vector1[1][1]="BMW";
	$vector1[1][2]="15";
	$vector1[1][3]="13";

	$vector1[2][0]="Modelo 2";
	$vector1[2][1]="Saab";
	$vector1[2][2]="5";
	$vector1[2][3]="2";

	$vector1[3][0]="Modelo 3";
	$vector1[3][1]="Land Rover";
	$vector1[3][2]="17";
	$vector1[3][3]="15";

// un modo de hacerlo
	$mod = array(array("- Modelo 0","volvo",22,18),array("- Modelo 1","BMW",15,13),array("- Modelo 2","Saab",5,2),array("- Modelo 3","Land Rover",17,15));
	echo sizeof($mod)."</br>";
	echo sizeof($mod[0])."</br>";
	for ($i=0; $i < sizeof($mod); $i++) {
		for ($j=0; $j < sizeof($mod); $j++) {  
		echo $mod[$i][$j]."</br>";

		}
	}
	var_dump($mod);

	//la misma forma de antes pero con las array mas ordenadas
	$coches=array(
	array("- Modelo 0","volvo",22,18),
	array("- Modelo 1","BMW",15,13),
	array("- Modelo 1","BMW",15,13),
	array("- Modelo 3","Land Rover",17,15)
	);

	for ($i=0; $i < sizeof($coches); $i++) {
		for ($j=0; $j < sizeof($coches[$i]); $j++) {//recorremos la matriz de coches[$i]  
			if ($coches[$i][2] > 15) {//recorremos la matriz para cojer solo las ventas mallores de 15
				echo $coches[$i][$j]."</br>";//imprimimos

			}
		}
	}
	var_dump($coches);
*/
$mod["m1"]["id"]="modelo 1";
$mod["m1"]["nombre"]="volvo";
$mod["m1"]["ventas"]="22";
$mod["m1"]["stock"]="15";

$mod["m2"]["id"]="modelo 2";
$mod["m2"]["nombre"]="audi";
$mod["m2"]["ventas"]="12";
$mod["m2"]["stock"]="14";

$mod["m3"]["id"]="modelo 3";
$mod["m3"]["nombre"]="ford";
$mod["m3"]["ventas"]="17";
$mod["m3"]["stock"]="15";

$mod["m4"]["id"]="modelo 4";
$mod["m4"]["nombre"]="BMW";
$mod["m4"]["ventas"]="20";
$mod["m4"]["stock"]="18";

$M2["m1"] = array("id" => "modelo 1",
	"nombre"=>"volvo",
	"ventas"=>"22",
	"stock"=>"15");

$M2["m2"] = array("id" => "modelo 2",
	"nombre"=>"audi",
	"ventas"=>"12",
	"stock"=>"14");

$M2["m3"] = array("id" => "modelo 3",
	"nombre"=>"ford",
	"ventas"=>"17",
	"stock"=>"15");

$M2["m4"] = array("id" => "modelo 4",
	"nombre"=>"BMW",
	"ventas"=>"20",
	"stock"=>"18");

$M3 = array(array(
				"id" => "modelo 1",
				"nombre"=>"volvo",
				"ventas"=>"22",
				"stock"=>"15"
			),array(
				"id" => "modelo 2",
				"nombre"=>"audi",
				"ventas"=>"12",
				"stock"=>"14"
			),array(
				"id" => "modelo 3",
				"nombre"=>"ford",
				"ventas"=>"17",
				"stock"=>"15"
			),array(
				"id" => "modelo 4",
				"nombre"=>"BMW",
				"ventas"=>"20",
				"stock"=>"18"
			));

?>