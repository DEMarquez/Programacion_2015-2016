<html>		
	<body>
		<center>
			
			<?php

				echo "<h1>formulario metodo: " . $_SERVER["REQUEST_METHOD"] . "</h1>";
				echo "<h1>QUERY_STRING: $_SERVER[QUERY_STRING] </h1>";

			?>
		<hr>
			<?php

				foreach ($_GET as $indice => $valor) {
					echo "$indice : $valor <br>";
				}

			?>
		<hr>	
			<?php
			
				echo "marca " . $_GET["marca"] ."modelo " . $_GET["modelo"] . "motor " . $_GET["motor"] . "cc " . $_GET["cc"];
			
			?>
			
		</center>
	</body>
</html>		
