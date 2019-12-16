<?php
include 'conect.php';
session_start();

	if (isset($_POST['btn1']))
	 {
	 		
	 	$n1=$_POST['identi'];
	 	$n2=$_POST['nombre'];
	 	$n3=$_POST['telef'];
	 	$n4= 1;
	 	$n5=$_POST['login'];
	 	$n6=$_POST['contra'];
	 	$n7=1;
	 
	 	try{
	 		 $sql="INSERT INTO `persona`(`id_persona`, `nombre`, `telefono`, `fk_rol`, `login`, `estado_pers`, `pasword`)VALUES (:id, :nom,:tel,:rol,:log,:est,:contr)";

	 		  $resultado=$base->prepare($sql);
	 		 $resultado->execute(array(":id"=>$n1, ":nom"=>$n2, ":tel"=>$n3, ":rol"=>$n4, ":log"=>$n5, ":contr"=>$n6, ":est"=>$n7 ))	
	 						
	 		 ?>
	 		 <script language='javascript'>window.alert(" Registro ingresado con exito!!!");window.location="../agregar_administrador.php"</script>	
	 		<?php
	 	    }
	 		catch(Exception $e)
	 		{
	 			die('Error:'.$e->getMessage());
	 		}
	  }
	 ?>