<?php
function Capicua($num){
	
	$rest1=0;
	$rest2=0;
	$rest3=0;
	$rest4=0;
	$div1=0;
	$div2=0;
	$div3=0;
	$rec1=0;
	$rec2=0;

		$rest1=$num%10;
		$div1=$num/10;

		$rest2=$div1%10;
		$div2=$div1/10;

		$rest3=$div2%10;
		$div3=$div2/10;

		$rest4=$div3%10;

		$rec1=($rest1*1)+($rest2*10)+($rest3*100)+($rest4*1000);
		$rec2=($rest1*1000)+($rest2*100)+($rest3*10)+($rest4*1);

		if ($rec1==$rec2) {
			echo "El numero es Capicua";
		}else{
			echo "El numero no es Capicua";
		}

}
$fun=Capicua(33133);
echo $fun;
?>