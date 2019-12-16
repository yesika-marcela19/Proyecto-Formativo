<?php
include 'conect.php';
session_start();
	if(isset($_POST['btn1'])){

		$n1=$_POST['uno'];

		try{

			$sql="INSERT INTO bateria(`id_bateria`,`nombre_bateria`) VALUES ('',:uno)";

			$resultado=$base->prepare($sql);
			$resultado->execute(array(":uno"=>$n1));
			?>

			<script languaje='javascript'>alert("Registro exitoso");window.location="../agregar_bateria.php"</script>

			<?php

			$resultado->closeCursor();
		}
		catch(exception $e){
			die('error ->'.$e->getMessage());

		}
	}
?>