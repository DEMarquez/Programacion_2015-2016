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
		$max=0;
		
		for ($i=0; $i < $n ; $i++) { 
				
			if ($v[$i] %2 == 0 && $max < $v[$i]) {
					
					$max = $v[$i];

				}	

			}
			
				echo"El maximo $max ";
		

?>
</p>
</body>
</html>