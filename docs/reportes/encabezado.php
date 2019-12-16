<?php
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo o imagen
    $this->Image('logo.png',10,8,23);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(45);
    // Título
    $this->Cell(100,10,'Reporte de actividades',1,0,'C');
    // Salto de línea
    $this->Ln(20);
}


// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

}
?>