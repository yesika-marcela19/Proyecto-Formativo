<?php
	
  include 'conect.php';
   session_start();
    
    $estanque=$_POST['peticion'];

    $sql="SELECT id_lote, fk_estanque from lote  where id_lote='$estanque' ";
    $data=$base->prepare($sql);
    $data->execute();

    $cadena=" <label> Lote </label> 
          <select class='form-control'name='lote' id='lote'>";

       while ($row=$data->fetch(PDO::FETCH_ASSOC)) {
       	$cadena=$cadena.'<option value='.$row['fk_estanque'].'>' .utf8_encode($row['fk_estanque']). '</option>';

       }

       echo $cadena. "</select>";

?>