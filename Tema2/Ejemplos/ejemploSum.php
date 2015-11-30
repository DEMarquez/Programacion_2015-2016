<html>
<head>
	<title>ejemplo</title>
</head>
<body>
	<h2>klj</h2>
<p>
	<?php

		$suma=20
		$v = array(5,6,20,1);
		
			for ($i=0; $i < 4 ; $i++) { 
				


				if ($v[$i] > 5) {
					$suma = $suma + $v[$i];
				}
			}
			echo "$suma";
?>
</p>
</body>
</html>