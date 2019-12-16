<!DOCTYPE html>
	<html>
	<head>
		<title>

			ejemplo de conexion

		</title>
	</head>
	<body>

		<?php  
		
		try {

			$base=new PDO ('mysql:host=localhost;dbname=piscicola','root','');	
		} catch (Exception $e) {
			die('error:'.$e->getMessage());

		}
		?>

	</body>
	</html>
  