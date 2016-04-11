<html>
<head>
	<title></title>
</head>
<body>
	<h2></h2>
<p>
	<?php

		$suma=0;
		$v= array(2,7,15,3,20,6);
		$n=sizeof($v);
		$pares=0;
		
		
		for ($i=0; $i < $n ; $i=$i+2) { 
				
			//if($i %2 == 0){
					
					$suma=$suma+$v[$i];
								
			//}		
		}
		
		echo "<b>La suma es</b>: $suma";

?>
</p>
</body>
</html>