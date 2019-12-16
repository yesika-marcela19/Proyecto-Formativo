<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <title>
                Habilitar
            </title>
            <?php
				include 'conect.php';
				session_start();
		    ?>
        </meta>
    </head>
    <body>
        <?php
		$n=$_REQUEST['cod'];
		
		try
		{
		$sql="UPDATE persona set estado_pers=1 WHERE id_persona='$n'";
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
            window.location="../consulta_inactivos.php"
        </script>
    </body>
</html>