<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <title>
                Eliminar
            </title>
            <?php
				include 'conect.php';
				session_start(); 
			?>
    </head>
    <body>
        <?php
		$n=$_REQUEST['cod'];
		
		try
		{
		$sql="UPDATE estanque set estado_estanque=0 WHERE id_estanque='$n'";
			$resultado=$base->
        prepare($sql);
			$resultado->execute(array());
			?>
        <?php
		}
		catch(Exception $y)
		{
			die('error'. $y->
        getMessage());
		}
		
		?>
        <script language="javascript">
            window.location="../consulta_estado_estanque.php"
        </script>
    </body>
</html>