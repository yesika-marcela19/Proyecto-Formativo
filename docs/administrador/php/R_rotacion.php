<?php
include 'conect.php';
session_start();

if(isset($_POST['btn1'])){
	$n1=$_POST['cantidad'];
	$n2=$_POST['descripcion'];
	$n3=$_POST['fecha'];
	$n4=$_POST['estanque1'];
	$n5=$_SESSION['id_persona'];
	$n6=2;
	$n7=$_POST['lote1'];
	$n8=$_POST['estanque2'];
	$n9=$_POST['lote2'];
	$n10="si";


		$sql="INSERT INTO `actividad`(`id_actividad`,`cantidad`, `descripcion`, `fecha`, `fk_estanque`, `fk_persona`,`fk_tipo_actividad`,`lote`,`notificacion`) VALUES ('',:uno,:dos,:tres,:cuatro,:cinco,:seis,:siete,:not)";		
		$resultado=$base->prepare($sql);
		$resultado->execute(array(":uno"=>$n1,":dos"=>$n2,":tres"=>$n3,":cuatro"=>$n4,":cinco"=>$n5,":seis"=>$n6,":siete"=>$n7,":not"=>$n10));
		
		if($sql== true){
			$sql="INSERT INTO `actividad`(`id_actividad`,`cantidad`, `descripcion`, `fecha`, `fk_estanque`, `fk_persona`,`fk_tipo_actividad`,`lote`,`notificacion`) VALUES ('',:uno,:dos,:tres,:cuatro,:cinco,:seis,:siete,:not)";		
			$resultado=$base->prepare($sql);
			$resultado->execute(array(":uno"=>$n1,":dos"=>$n2,":tres"=>$n3,":cuatro"=>$n8,":cinco"=>$n5,":seis"=>$n6,":siete"=>$n9,"not"=>$n10));
			if($n7!= ""){
				$sql2="UPDATE lote SET cantidad=cantidad - $n1 where id_lote= ?";
				$resul=$base->prepare($sql2);
	 			$resul->execute(array($n7));
	 			if($n9!= ""){
	 				$sql3="UPDATE lote SET cantidad=cantidad + $n1 where id_lote= ?";
					$resul=$base->prepare($sql3);
	 				$resul->execute(array($n9));
	 				?>
	 			    	<script languaje='javascript'>alert("Registro exitoso");window.location="../rotacion.php"</script>
	 			    <?php
	 			}
			}
		}
	
	}
?>