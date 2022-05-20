<?php 
require('../library/fpdf/fpdf.php'); 
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../img/craken.png',165,5,35);
    $this->Ln();
    // Arial bold 15
    $this->SetFont('Arial','B',13);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(40,25,'Reporte de Oficios registrados en la plataforma',0,0,'C');
    // Salto de línea
    $this->Ln(30);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','B',10);
    $this->Cell(0,4,'www.iscjoseluischavezg.mx',0,1,'C');
    $this->SetFont('Arial','B',8);
    // Número de página
    $this->Cell(480,10,'Pagina: '.$this->PageNo().'/{nb}',0,0,'C');
}
}
session_start();
require 'conection.php';
require 'querys.php';
session_start();
$fecha = date('d-m-Y');
$tiempo = date("H:m:s");
// Creación del objeto de la clase heredada
$pdf = new PDF('P', 'mm', 'A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetMargins(10, 25 , 10);
$pdf->SetFont('Arial','',9);
//$pdf->setXY(10,35);
$pdf->SetTopMargin(40);
$pdf->Cell(40,5,'   Hora del reporte: '.$tiempo,0,0,'C');
$pdf->Cell(390,5,'Fecha: '.$fecha,0,1,'C');
$pdf->Cell(32,5,'Total de Registros: '.$TotalRow,0,0,'C');
$pdf->Ln(8);
$pdf->SetFillColor(227, 234, 240);
$pdf->SetDrawColor(61,61,61);
$pdf->SetTextColor(86, 87, 89);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(30,6,'Nombre del Oficio','B',0,'',1);
$pdf->Cell(160,6,iconv('UTF-8','ISO-8859-2', Descripción),'B',0,'C',1);
while($row = $oficios->fetch_assoc()){    
$pdf->Cell(30,6,iconv('UTF-8','ISO-8859-2',$row['NombreOf']),'B',0,'J');
$pdf->SetFont('Arial','',7);
$pdf->Cell(160,6,iconv('UTF-8','ISO-8859-2',$row['Descripcion']),'B',1,'J');                   
}
$pdf->Ln();

$pdf->Output();
?>
