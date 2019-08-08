<?php

	if(isset($_POST['btn1'])){
   require 'conect.php';
		$n1=$_POST['cantidad'];
		$n2=$_POST['descripcion'];
        $n3=$_POST['fecha'];
        $n4=$_POST['estanque'];
        $n5=5;
        $n7=$_POST['lote'];

		
		try{

			$sql="INSERT INTO `actividad`(`id_actividad`,`cantidad`, `descripcion`, `fecha`, `fk_estanque`,`fk_tipo_actividad`,`lote`) VALUES ('',:cant,:des,:fech,:fkest,:tact,:lot)";

			$resultado=$base->prepare($sql);
			$resultado->execute(array(":cant"=>$n1,":des"=>$n2,":fech"=>$n3,":fkest"=>$n4,":tact"=>$n5,":lot"=>$n7));
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
