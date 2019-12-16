<?php
include 'conect.php';
session_start();
	if(isset($_POST['btn1'])){

		$n1=$_POST['uno'];
		$n2=$_POST['dos'];
        $n3=$_POST['tres'];
        $n4=$_POST['cuatro'];
        $n5=$_POST['cinco'];
		$n6=$_POST['seis'];
		$n7=1;
		try{

			$sql="INSERT INTO estanque(`id_estanque`,`latitud`, `longitud`, `area`, `capacidad`,`fk_bateria`,`tipo_estanque`,`estado_estanque`) VALUES ('',:uno,:dos,:tres,:cuatro,:cinco,:seis,:siete)";

			$resultado=$base->prepare($sql);
			$resultado->execute(array(":uno"=>$n1,":dos"=>$n2,":tres"=>$n3,":cuatro"=>$n4,":cinco"=>$n5,":seis"=>$n6,":siete"=>$n7));
			?>

			<script languaje='javascript'>alert("Registro exitoso");window.location="../agregar_estanque.php"</script>

			<?php

			$resultado->closeCursor();
		}
		catch(exception $e){
			die('error ->'.$e->getMessage());

		}
	}
?>