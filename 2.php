<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('tcpdf/tcpdf.php');

// Get form data from the customer
$company_name = $_POST['company_name'];
$company_address = $_POST['company_address'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$website = $_POST['website'];
$gst = $_POST['gst'];
$names = $_POST['names'];
$contact_person = $_POST['contact_person'];
$business_type = $_POST['business_type'];
$annual_turnover = $_POST['annual_turnover'];
$paid_up_capital = $_POST['paid_up_capital'];
$agencies_held = $_POST['agencies_held'];
$office_area = $_POST['office_area'];
$office_address = $_POST['office_address'];
$storage_area = $_POST['storage_area'];
$storage_address = $_POST['storage_address'];
$wstafs = $_POST['wstafs'];
$noofsales = $_POST['noofsales'];
$space = $_POST['space'];
$display_space = $_POST['display_space'];
$product1 = $_POST['product1'];
$duration1 = $_POST['duration1'];
$area1 = $_POST['area1'];
$product2 = $_POST['product2'];
$duration2 = $_POST['duration2'];
$area2 = $_POST['area2'];
$distributorship_area = $_POST['distributorship_area'];
$concerns = $_POST['concerns'];
$bankers = $_POST['bankers'];
$cc = $_POST['cc'];
$od = $_POST['od'];
$reference1 = $_POST['reference1'];
$reference2 = $_POST['reference2'];
$investment = $_POST['investment'];
$credit = $_POST['credit'];
$other_info = $_POST['other_info'];
// Add more form fields as needed

// Create a new PDF instance


$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Mobitech Industries LLP');
$pdf->SetTitle('Distributor Form');

// Extend the TCPDF class to create a custom header
class CustomPDF extends TCPDF {
    public function Header() {
        // Define the header content
        $headerContent = '
        <table style="width: 100%;">
            <tr>
                <td><img src="../media/logo.png" style="width: 100px;"></td>
                <td><span style="font-weight: bold; font-size: 14pt;">Mobitech Industries LLP</span><br>
                </td>
            </tr>
        </table>';

        // Write the header content
        $this->writeHTML($headerContent, true, false, false, false, '');
    }
}

// Create a new instance of the custom PDF class
$pdf = new CustomPDF();

// Add a new page
$pdf->AddPage();



// Set font settings
$pdf->SetFont('helvetica', 'B', 14);



// Output the form data
$pdf->Cell(0, 10, 'DISTRIBUTOR APPOINTMENT FORM', 0, 1, 'C');
$pdf->Ln(10);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 10, '1. NAME OF THE COMPANY/ FIRM: ' . $company_name, 0, 1);
$pdf->Cell(0, 10, 'ADDRESS OF YOUR COMPANY /FIRM / PROPRIETOR: ' . $company_address, 0, 1);
$pdf->Cell(0, 10, 'Telephone No. : ' . $telephone, 0, 1);


$pdf->Cell(0, 10, 'Email Id : ' . $email, 0, 1);
$pdf->Cell(0, 10, 'Website : ' . $website, 0, 1);
$pdf->Cell(0, 10, 'GST No. : ' . $gst, 0, 1);


$pdf->Cell(0, 10, '2. NAMES OF PROPRIETOR / PARTNERS / DIRECTORS: ' . $names, 0, 1);

$pdf->Cell(0, 10, '3. CONTACT DETAILS & RESIDENCE (PHONE NUMBER): ' . $contact_person, 0, 1);

$pdf->Cell(0, 10, '4. EXISTING BUSINESS DETAILS:', 0, 1);
$pdf->Cell(0, 10, 'a. Type of Business : ' . $business_type, 0, 1);
$pdf->Cell(0, 10, 'b. Annual Turnover : ' . $annual_turnover, 0, 1);
$pdf->Cell(0, 10, 'c. Paid Up Capital : ' . $paid_up_capital, 0, 1);
$pdf->Cell(0, 10, 'd. If Agencies held, then name of the Companies: ' . $agencies_held, 0, 1);


$pdf->Cell(0, 10, '5. EXISTING BUSINESS FACILITIES AVAILABLE:', 0, 1);
$pdf->Cell(0, 10, 'a. Office area and address : '.$office_area , $office_address, 0, 1);
$pdf->Cell(0, 10, 'b. Storage area and its address : ' .$storage_area , $storage_address, 0, 1);
$pdf->Cell(0, 10, 'c. Shop / Showroom : ' . $showroom, 0, 1);
$pdf->Cell(0, 10, 'd. Vehicles Owned for delivery : ' . $delivery_vehicles, 0, 1);
$pdf->Cell(0, 10, 'e. No. of working staff : ' . $wstafs, 0, 1);
$pdf->Cell(0, 10, 'f. No. of salesmen / sales girls : ' . $noofsales, 0, 1);
$pdf->Cell(0, 10, 'g. Display space available : ' . $space, 0, 1);
$pdf->Cell(0, 10, 'h. Computer & Internet facility : ' . $display_space, 0, 1);


$pdf->Cell(0, 10, '6. SELLING EXPERIENCE:', 0, 1);
$pdf->Cell(0, 10, '1a. Product : ' . $product1, 0, 1);
$pdf->Cell(0, 10, 'b. Period (Duration) : ' . $duration1, 0, 1);  
$pdf->Cell(0, 10, 'c. Area : ' . $area1, 0, 1);    

$pdf->Cell(0, 10, '2a. Product : ' . $product2, 0, 1);
$pdf->Cell(0, 10, 'b. Period (Duration) : ' . $duration2, 0, 1);  
$pdf->Cell(0, 10, 'c. Area : ' . $area2, 0, 1);    

$pdf->Cell(0, 10, '7. AREA FOR WHICH DISTRIBUTORSHIP IS REQUIRED: ' . $distributorship_area, 0, 1);

$pdf->Cell(0, 10, '8. NAME OF ASSOCIATE / SISTER CONCERNS IN SIMILAR BUSINESS IF ANY, THEIR TURNOVER AND NAME OF THE COMPANIES FOR WHICH DISTRIBUTORSHIP IS HELD.: ' . $concerns, 0, 1);

$pdf->Cell(0, 10, '9 a. Name and address of your Bankers: ' . $bankers, 0, 1);
$pdf->Cell(0, 10, '9 b. Bank Facilities available C/C: ' . $cc, 0, 1);
$pdf->Cell(0, 10, '9 c. Bank Facilities available O/D: ' . $od, 0, 1);


$pdf->Cell(0, 10, '10 a. REFERENCES (ONE), NAME & ADDRESS: ' . $reference1, 0, 1);
$pdf->Cell(0, 10, '10 b. REFERENCES (ONE), NAME & ADDRESS: ' . $reference2, 0, 1);



$pdf->Cell(0, 10, '11. IF REGULAR RETURN ON YOUR RISK AND INVESTMENT IS ASSURED, HOW MUCH INVESTMENT CAN YOU MAKE? (VALUE): ' . $investment, 0, 1);


$pdf->Cell(0, 10, '12. HOW MUCH CREDIT CAN YOU GIVE TO YOUR RETAILERS? : ' . $credit, 0, 1);

$pdf->Cell(0, 10, '13. ANY OTHER RELEVANT INFORMATION YOU MAY DESIRE TO SHARE WITH US : ' . $other_info, 0, 1);

// Add more form fields as needed

// Output the PDF as a file for download
$pdf->Output('distributor_form.pdf', 'D');
?>
     
