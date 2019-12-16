	<?php
	try{
		$base=new PDO('mysql:host=localhost; dbname=piscicola','root','');
		$base->exec("SET CHARACTER SET utf8");
	}
	catch(Exception $e){
		die('Error: '.$e->getMessage());
	}
	?>
        