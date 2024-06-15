<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('tcpdf/tcpdf.php');

$company_name = $_POST['company_name'];
$company_address = $_POST['company_address'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];


$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Mobitech Industries LLP');
$pdf->SetTitle('Distributor Form');

class CustomPDF extends TCPDF {
    public function Header() {
        $headerContent = '
        <table style="width: 100%;">
            <tr>
                <td><img src="../media/logo.png" style="width: 100px;"></td>
                <td><span style="font-weight: bold; font-size: 14pt;">Mobitech Industries LLP</span><br>
                </td>
            </tr>
        </table>';

        $this->writeHTML($headerContent, true, false, false, false, '');
    }
}

$pdf = new CustomPDF();

$pdf->AddPage();

$pdf->SetFont('helvetica', 'B', 14);


$pdf->Cell(0, 10, 'DISTRIBUTOR APPOINTMENT FORM', 0, 1, 'C');
$pdf->Ln(10);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 10, '1. NAME OF THE COMPANY/ FIRM: ' . $company_name, 0, 1);
$pdf->Cell(0, 10, 'ADDRESS OF YOUR COMPANY /FIRM / PROPRIETOR: ' . $company_address, 0, 1);
$pdf->Cell(0, 10, 'Telephone No. : ' . $telephone, 0, 1);


$pdf->Output('distributor_form.pdf', 'D');
?>