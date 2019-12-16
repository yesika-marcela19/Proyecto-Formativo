<?php
include 'conect.php';
session_start();
if(isset($_POST['btn1'])){
	
		$n1=$_POST['cantidad'];
		$n2=$_POST['descripcion'];
        $n3=$_POST['fecha'];
        $n4=$_POST['estanque'];
        $n5=5;
        $n6= $_SESSION['id_persona'];
        $n7=$_POST['lote'];
        $n8="no";
        		
		try{

			$sql="INSERT INTO `actividad`(`id_actividad`,`cantidad`, `descripcion`, `fecha`, `fk_estanque`,`fk_persona`,`fk_tipo_actividad`,`lote`,`notificacion`) VALUES ('',:cant,:des,:fech,:fkest,:fkpers ,:tact,:lot,:not)";

			$resultado=$base->prepare($sql);
			$resultado->execute(array(":cant"=>$n1,":des"=>$n2,":fech"=>$n3,":fkest"=>$n4,":fkpers"=>$n6,":tact"=>$n5,":lot"=>$n7,":not"=>$n8));
			?>

			<script languaje='javascript'>alert("Registro de exitoso");window.location="../alimentacion.php"</script>

			<?php

			$resultado->closeCursor();
		}
		catch(exception $e){
			die('error ->'.$e->getMessage());

		}
	}
?>
