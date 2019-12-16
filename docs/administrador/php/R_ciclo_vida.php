<?php 
include 'conect.php';


if (isset($_POST['btn1'])) {


	$n1=$_POST['semana'];
	$n2=$_POST['consumo1'];
	$n3=$_POST['consumo2'];
	$n5=$_POST['pesomin'];
	$n6=$_POST['pesomax'];
	$n7=$_POST['especie'];
	$n8=$_POST['alimentacion'];

	try{

		$sql="INSERT INTO `ciclo_vida` (`id_ciclo_vida`, `semana`, `consumo_diario`, `consumo_semanal`,`peso_min`, `peso_max`, `fk_tipo_especie`, `fk_tipo_alimentacion`) VALUES ('',:sem,:cond,:cons, :pesm, :pesx, :fkes, :fkal)";
		$resultado=$base ->prepare($sql);
		$resultado->execute(array(":sem"=>$n1,":cond"=>$n2,":cons"=>$n3,":pesm"=>$n5,":pesx"=>$n6,":fkes"=>$n7,":fkal"=>$n8));

?>

	<script language='javascript'>window.alert(" Registro ingresado con exito!!!");window.location="../registro_ciclo_vida.php"</script>	



	<?php
	}

	

	catch(Exception $e)
	{
		die('Error:'.$e->getMessage());
	}



}



?>