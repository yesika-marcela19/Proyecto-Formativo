<?php
	
	include 'conect.php';
	session_start();
	
	if(isset($_POST['btn1'])){
		$n1=$_POST['cantidad'];
		$n2=$_POST['descripcion'];
        $n3=$_POST['fecha'];
        $n4=$_POST['estanque'];
        $n5=6;
        $n7=$_POST['lote'];
        $n8=$_SESSION['id_persona'];
        $n9="no";

		try{

			$sql="INSERT INTO `actividad`(`id_actividad`,`cantidad`, `descripcion`, `fecha`, `fk_estanque`,`fk_persona`,`fk_tipo_actividad`,`lote`,`notificacion`) VALUES ('',:cant,:des,:fech,:fkest,:fkpers,:tact,:lot,:not)";

			$resultado=$base->prepare($sql);
			$resultado->execute(array(":cant"=>$n1,":des"=>$n2,":fech"=>$n3,":fkest"=>$n4,":tact"=>$n5,":lot"=>$n7,":fkpers"=>$n8,":not"=>$n9));
	 		if($n7!= ""){
	 				$sql1="UPDATE lote SET estado_lote=0 where id_lote= ?";
					$resul=$base->prepare($sql1);
	 				$resul->execute(array($n7));
	 				?>
	 			    	<script languaje='javascript'>alert("Registro exitoso");window.location="../produccion.php"</script>
	 			    <?php
	 			}

			$resultado->closeCursor();
		}
		catch(exception $e){
			die('error ->'.$e->getMessage());

		}
	}
	?>
	?>
