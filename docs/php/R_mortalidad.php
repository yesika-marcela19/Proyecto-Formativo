<?php
			if(isset($_POST['btn1'])){
              require 'conect.php';
				$n1=$_POST['cantidad'];
				$n2=$_POST['descripcion'];
				$n3=$_POST['fecha'];
				$n4=$_POST['estanque'];
			
	    		$n6=3;
        		$n7=$_POST['lote'];

				

				$sql="INSERT INTO `actividad`(`id_actividad`,`cantidad`, `descripcion`, `fecha`, `fk_estanque`,`fk_tipo_actividad`,`lote`) VALUES ('',:uno,:dos,:tres,:cuatro,:seis,:siete)";
				$resultado=$base->prepare($sql);
				$resultado->execute(array(":uno"=>$n1,":dos"=>$n2,":tres"=>$n3,":cuatro"=>$n4,":seis"=>$n6,":siete"=>$n7));
				
				if ($sql == true) {

					if ($n7!= ""){
						$sql1="UPDATE lote SET cantidad= cantidad - $n1 where id_lote= ?";
						$resul=$base->prepare($sql1);
	 			    	$resul->execute(array($n7));
	 			    ?>
	 			    <script languaje='javascript'>alert("Registro exitoso");window.location="../mortalidad.php"</script>
	 			    <?php
						
					}
				}										
			}
		?>