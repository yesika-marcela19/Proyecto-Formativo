	<?php
	try{
		$base=new PDO('mysql:host=localhost; dbname=piscicola','root','');
		$base->exec("SET CHARACTER SET utf8");
		//echo "Conexión de base de datos verificada – COMODIN!!!";
	}
	catch(Exception $e){
		die('Error: '.$e->getMessage());
	}
	?>
