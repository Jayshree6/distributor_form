<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('fpdf/fpdf.php');
require_once('Fpdi/autoload.php');

// initiate FPDI
$pdf = new \setasign\Fpdi\Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile('pdf/di_appo.pdf');
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 0, 0, 215);


$pdf->AddPage();
$pdf->setSourceFile('pdf/di_appo.pdf');
$tplIdx = $pdf->importPage(2);
$pdf->useTemplate($tplIdx, 0, 0, 215);


// now write some text above the imported page
$pdf->SetFont('Helvetica');
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(40, 30);
$pdf->Write(0, 'This is just a simple text');

$pdf->Output('test.pdf', 'D');
