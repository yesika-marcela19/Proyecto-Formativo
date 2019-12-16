<?php
	include 'php/conect.php';

	$contiene=$_POST['contiene'];

	?>
	<label for="">Seleccione lote</label>
	<select class='form-control' name='lote' id='lote' required>";
	<?php
	
	$sql="SELECT estanque,id_lote from calcular_alimentacion_semana_actual  where estanque=$contiene";
    $data=$base->prepare($sql);
    $data->execute();
    while( $row=$data->fetch(PDO::FETCH_ASSOC)){
        echo"<option value=".$row["id_lote"].">".$row["id_lote"]." </option>";                                   
     }
?>