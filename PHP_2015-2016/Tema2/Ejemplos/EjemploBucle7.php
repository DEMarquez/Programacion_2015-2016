<html>
<head>
	<title></title>
</head>
<body>
	<h2></h2>
<p>
	<?php

		
		$v= array(2,7,15,7,20,7);
		$n=sizeof($v);
		$suma=0;
		
		for ($i=0; $i < $n ; $i++) { 
				
			if ( $suma < 30) {
					
				$suma=$suma+$v[$i];

				}	

			}
			
				echo"<b>La suma es</b>: $suma ";
		

?>
</p>
</body>
</html>