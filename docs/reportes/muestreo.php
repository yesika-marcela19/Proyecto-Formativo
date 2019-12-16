<?php 
 include 'fpdf/fpdf.php';
 include 'conect.php';
require('encabezado.php');

 //sentencia sql 

 $sql= "SELECT  *FROM actividad  inner join persona on id_persona=fk_persona where fk_tipo_actividad =1 ";
 $resultado=$base->prepare($sql);
 $resultado->execute(array());


 //creacion de objeto
$pdf= new PDF();
$pdf->AliasNbpages();
$pdf->AddPage(); 
 
//creacion de la tabla

$pdf->SetFillcolor(232,232,232);
$pdf->SetFont('arial','B',12);
$pdf->Cell(27,9,utf8_decode('Numero'),1,0,'c',1);

$pdf->Cell(27,9,utf8_decode('Cantidad'),1,0,'C',1);

$pdf->Cell(52,9,utf8_decode('Descripcion'),1,0,'C',1);


$pdf->Cell(33,9,utf8_decode('Fecha'),1,0,'C',1);

$pdf->Cell(25,9,utf8_decode('Estanque'),1,0 ,'C',1);


$pdf->Cell(25,9,utf8_decode('lote'),1,1,'C',1);



//imprimir los datos

$pdf->SetFont("arial",'B',10);
while ($consulta=$resultado->FETCH(PDO::FETCH_ASSOC)) {

$pdf->Cell(27,9,utf8_decode($consulta['id_actividad']),1,0,'C');

$pdf->Cell(27,9,utf8_decode($consulta['cantidad']),1,0,'C');

$pdf->Cell(52,9,utf8_decode($consulta['descripcion']),1,0,'C');

$pdf->Cell(33,9,utf8_decode($consulta['fecha']),1,0,'C');

$pdf->Cell(25,9,utf8_decode($consulta['fk_estanque']),1,0,'C');


$pdf->Cell(25,9,utf8_decode($consulta['lote']),1,1,'C');


}


$pdf->Output();
?>