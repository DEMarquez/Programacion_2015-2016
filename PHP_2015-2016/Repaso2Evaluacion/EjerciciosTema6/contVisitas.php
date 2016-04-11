<?php

	if (isset($_COOKIE["contador"])) {
		//true
		var_dump($_COOKIE);
		$cont=$_COOKIE["contador"]+1;
		setcookie("contador",$cont);
		
		if ($_COOKIE["contador"]==10) {
			//eres el visitante numero 10
			echo '
				<html>
					<body>
						<h1>Eres el visitante numero 10 ¡¡¡</h1>
					</body>
				</html>
			';

		}else{
			//no eres el visitante numero 10
			echo '
				<html>
					<body>
						<h1>Bienvenido a la pagina</h1>
						<a href="contVisitas.php">Recargar</a>
					</body>
				</html>
			';

		}

	}else{
		//false
		setcookie("contador","1");
		echo '
			<html>
				<body>
					<h1>Bienvenido a la pagina</h1>
					<a href="contVisitas.php">Recargar</a>
				</body>
			</html>
		';

	}

?>