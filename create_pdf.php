<?php
require('fpdf/fpdf.php');

$tipo = $_POST['tipo_pdf'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Tipo de reporte: ' . $_POST['tipo_pdf'], 0, 2);
$pdf->Cell(40,10,'Nombre: ' . $_POST['nombre'], 0, 2);
$pdf->Cell(40,10,'Telefono: ' . $_POST['telefono'], 0, 2);
$pdf->Cell(40,10,'Direccion: ' . $_POST['direccion'], 0, 2);

$pdf->Output('I', 'reporte.pdf');

