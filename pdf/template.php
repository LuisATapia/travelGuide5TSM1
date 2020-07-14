<?php
require('fpdf/fpdf.php');
session_start();

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('logo.PNG', 10, 8, 33);
        // Arial bold 15
        $this->SetFont('Times', 'B', 20);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(43, 10, 'Report of Activities', 0, 0, 'C');
        $this->Ln(30);
        $this->Cell(205, 10, 'User information', 0, 0, 'C');

        // Salto de línea
        $this->Ln(20);
        $this->SetFont('Times', 'B', 16);
        $this->Cell(60, 10, 'Name:', 0, 0, 'C', 0);
        $this->Cell(85, 10, 'CURP:', 0, 0, 'C', 0);
        $this->Cell(45, 10, 'Date:', 0, 1, 'C', 0);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Times', 'I', 8);
        // Número de página
        $this->Cell(0, 10, utf8_decode('Page ') . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}


$rows = [];
include 'Connections/cn.travels.php';
$query = new MongoDB\Driver\Query([]);

$rows = $manager->executeQuery($dbname, $query);


$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Times', '', 12);
$fechaActual = date('d-m-Y H:i:s');

include('Connections/selectOnePDF.php');
$pdf->Cell(60, 10, utf8_decode($name . " " . $last), 0, 0, 'C', 0);
$pdf->Cell(85, 10, $curp, 0, 0, 'C', 0);
$pdf->Cell(45, 10, $fechaActual, 0, 0, 'C', 0);
$pdf->SetTitle(utf8_decode($name . " " . $last . " Travel Report"));



$pdf->Ln(30);
$pdf->SetFont('Times', 'B', 20);
$pdf->Cell(200, 10, 'Travel log', 0, 0, 'C');
$pdf->Ln(15);
$pdf->SetFont('Times', 'B', 16);
$pdf->Cell(40, 10, 'Number card:', 1, 0, 'C', 0);
$pdf->Cell(60, 10, 'Booth name', 1, 0, 'C', 0);
$pdf->Cell(45, 10, 'Toll', 1, 0, 'C', 0);
$pdf->Cell(45, 10, 'Payment date', 1, 1, 'C', 0);
$pdf->SetFont('Times', '', 12);

foreach ($rows as $row) {
    if ($_SESSION['idUSer'] == $row->_id) {
        $pdf->Cell(40, 10, $row->numCard, 1, 0, 'C', 0);
        $pdf->Cell(60, 10, $row->booth, 1, 0, 'C', 0);
        $pdf->Cell(45, 10, $row->toll, 1, 0, 'C', 0);
        $pdf->Cell(45, 10, $row->date, 1, 1, 'C', 0);
    }
}


$pdf->Output();
