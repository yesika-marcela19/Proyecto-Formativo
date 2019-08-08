<?php
		try
		{
			require'conect.php';

			if(isset($_POST['btn']))
			{
				$uno=$_POST['uno'];
				$dos=$_POST['dos'];
				$tres=$_POST['tres'];
				$cuatro=$_POST['cuatro'];
				$cinco=$_POST['cinco'];
			   $n=$_REQUEST['act'];
			   echo $n;
			   echo $cinco;

				$sql="UPDATE persona SET nombre=:dos, telefono=:tres, fk_rol=:cuatro, login=:cinco WHERE id_persona=".$_REQUEST['act'].";";
			    $resul=$base->prepare($sql);
				$resul->execute(array(":uno"=>$uno,":dos"=>$dos,":tres"=>$tres,":cuatro"=> $cuatro,":cinco"=>$cinco));
			?>
			<script language='javascript'>window.alert("Actualizo con exito"); window.location="consultar_operario.php"</script>
			<?php
			}

		}
		catch(Exception $y)
		{
			die('error :' .$y->getMessage());
		}		
		?>