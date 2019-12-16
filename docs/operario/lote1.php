<?php
	include 'php/conect.php';

	$contiene1=$_POST['contiene1'];
	
	?>
	<label for="">Lote origen</label>
	<select class='form-control' name='lote1' id='lote1' required>";
	<?php
	
	$sql="SELECT estanque,id_lote from calcular_alimentacion_semana_actual  where estanque=$contiene1";
    $data=$base->prepare($sql);
    $data->execute();
    while( $row=$data->fetch(PDO::FETCH_ASSOC)){
        echo"<option value=".$row["id_lote"].">".$row["id_lote"]." </option>";                                   
     }
?>