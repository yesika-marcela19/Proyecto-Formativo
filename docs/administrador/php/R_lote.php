<?php
include 'conect.php';
session_start();
	if(isset($_POST['btn1'])){

		$n1=$_POST['uno'];
		$n2=$_POST['dos'];
        $n3=$_POST['tres'];
        $n4=$_POST['cuatro'];
        $n5=$_POST['cinco'];
		$n6=1;
		
		try{

			$sql="INSERT INTO lote(`id_lote`,`cantidad`, `fecha_ingreso`, `fecha_salida`, `fk_estanque`,`fk_tipo_especie`,`estado_lote`) VALUES ('',:uno,:dos,:tres,:cuatro,:cinco,:seis)";

			$resultado=$base->prepare($sql);
			$resultado->execute(array(":uno"=>$n1,":dos"=>$n2,":tres"=>$n3,":cuatro"=>$n4,":cinco"=>$n5,":seis"=>$n6));
			?>

			<script languaje='javascript'>alert("Registro exitoso");window.location="../agregar_lote.php"</script>

			<?php

			$resultado->closeCursor();
		}
		catch(exception $e){
			die('error ->'.$e->getMessage());

		}
	}
?>