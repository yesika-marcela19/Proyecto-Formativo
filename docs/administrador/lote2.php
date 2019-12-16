<?php
	include 'php/conect.php';

	$contiene2=$_POST['contiene2'];

	?>
	<label for="">Lote destino</label>
	<select class='form-control' name='lote2' id='lote2' required>";
	<?php
	
	$sql="SELECT estanque,id_lote from calcular_alimentacion_semana_actual  where estanque=$contiene2";
    $data=$base->prepare($sql);
    $data->execute();
    while( $row=$data->fetch(PDO::FETCH_ASSOC)){
        echo"<option value=".$row["id_lote"].">".$row["id_lote"]." </option>";                                   
     }
?>