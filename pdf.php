<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('fpdf/fpdf.php');
require_once('Fpdi/autoload.php');
require_once('dbconfig.php');

// Get form data from the customer
$company_name = $_POST['company_name'];
$company_address = $_POST['company_address'];
$telephone = $_POST['telephone'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$gst = $_POST['gst'];
$names = $_POST['names'];
$desigs = $_POST['desigs'];
$names1 = $_POST['names1'];
$desigs1 = $_POST['desigs1'];
$dob = $_POST['dob'];
$doa = $_POST['doa'];
$state = $_POST['state'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$namess = $_POST['namess'];
$num = $_POST['num'];
$business_type = $_POST['business_type'];
$annual_turnover = $_POST['annual_turnover'];
$agencies_held = $_POST['agencies_held'];
$namer1 = $_POST['namer1'];
$numbr1 = $_POST['numbr1'];
$addrr1 = $_POST['addrr1'];
$namer2 = $_POST['namer2'];
$numbr2 = $_POST['numbr2'];
$addrr2 = $_POST['addrr2'];
$comp_name = $_POST['comp_name'];
// $area2 = $_POST['area2'];
$distributorship_area = $_POST['distributorship_area'];
$time = date("d/m/Y");
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

$pdf->AddPage();
$pdf->setSourceFile('pdf/di_appo.pdf');
$tplIdx = $pdf->importPage(3);
$pdf->useTemplate($tplIdx, 0, 0, 215);

$pdf->AddPage();
$pdf->setSourceFile('pdf/di_appo.pdf');
$tplIdx = $pdf->importPage(4);
$pdf->useTemplate($tplIdx, 0, 0, 215);

$pdf->SetFont('Helvetica');
$pdf->SetTextColor(0, 0, 0);

$pdf->SetXY(93, 70);
$pdf->Write(0, $company_name);

// $pdf->SetXY(98, 74.5);
// $pdf->Write(0, $company_address . ', ' . $city . ', ' . $pincode . ', ' . $state);


$maxWidth = 190; // Maximum width allowed for the text
$currentX = 98; // Initial X position
$currentY = 74.5; // Initial Y position
$words = explode(' ', $company_address . ', ' . ' ' . $city . ', ' . ' ' . $pincode . ', ' . ' ' . $state);

foreach ($words as $word) {
    $wordWidth = $pdf->GetStringWidth($word); // Get the width of the current word
    // Check if adding the current word exceeds the maximum width
    if ($currentX + $wordWidth > $maxWidth) {
        $currentY += 5; // Move to the next line
        $currentX = 30; // Reset X position
    }
    // Write the word
    // $pdf->SetFont('Helvetica', '', 11);
    $pdf->SetXY($currentX, $currentY);
    $pdf->Write(0, $word . ' ');
    $currentX += $wordWidth + 1; // Update X position for the next word
}


$pdf->SetXY(90, 85);
$pdf->Write(0, $telephone);

$pdf->SetXY(90, 90);
$pdf->Write(0, $mobile);

$pdf->SetXY(90, 95);
$pdf->Write(0, $email);

$pdf->SetXY(90, 100);
$pdf->Write(0, $gst);

$pdf->SetXY(50, 136.5);
$pdf->Write(0, $dob);

$pdf->SetXY(138, 136.5);
$pdf->Write(0, $doa);

// $pdf->SetXY(30, 125.5);
// $pdf->Write(0, $names . ' ( ' . $desigs . ' )');

// $pdf->SetXY(80, 125.5);
// $pdf->Write(0, ' , ' . $names1 . ' ( ' . $desigs1 . ' )');

// Set initial X position for $names and $desigs
$pdf->SetXY(30, 125.5);
$pdf->Write(0, $names . ' ( ' . $desigs . ' )' .  ', ');

// Get the width of the text that has been written so far
$currentX = $pdf->GetX();
$currentY = $pdf->GetY();

// Calculate the width of $desigs
$desigsWidth = $pdf->GetStringWidth($desigs);

// Set X position for $names1 and $desigs1
$pdf->SetXY($currentX + $desigsWidth - 20, $currentY);
$pdf->Write(0, $names1 . ' ( ' . $desigs1 . ' )');



$pdf->SetXY(27, 152);
$pdf->Write(0,('Name : ' . $namess));

$pdf->SetXY(27, 157);
$pdf->Write(0,('Mobile Number : ' . $num));

$pdf->SetXY(85, 176);
$pdf->Write(0, $business_type);

$pdf->SetXY(85, 180.3);
$pdf->Write(0, $comp_name);

$pdf->SetXY(85, 186);
$pdf->Write(0, $annual_turnover);

$pdf->SetXY(28, 197);
$pdf->Write(0, $agencies_held);

$pdf->SetXY(28, 215);
$pdf->Write(0, $distributorship_area);

$pdf->SetXY(30, 235);
$pdf->Write(0, $namer1);

$pdf->SetXY(70, 235);
$pdf->Write(0, $numbr1);

$pdf->SetXY(120, 235);
$pdf->Write(0, $addrr1);

$pdf->SetXY(30, 241);
$pdf->Write(0, $namer2);

$pdf->SetXY(70, 241);
$pdf->Write(0, $numbr2);

$pdf->SetXY(120, 241);
$pdf->Write(0, $addrr2);


$pdf->SetXY(38, 276);
$pdf->Write(0, $time);

$pdf->AddPage();
$pdf->setSourceFile('pdf/di_appo.pdf');
$tplIdx = $pdf->importPage(5);
$pdf->useTemplate($tplIdx, 0, 0, 215);


$pdf->SetXY(40, 56);
$pdf->Write(0, $time);

$pdf->SetXY(28, 74);
$pdf->Write(0, $company_name);

$maxWidth = 100; // Maximum width allowed for the text
$currentX = 28; // Initial X position
$currentY = 80; // Initial Y position
                                                                                                    1                                                                                                                                                                   
// $company_address = "Your company address"; // Replace this with the actual company address
$words = explode(' ', $company_address); // Split the company address into words

foreach ($words as $word) {
    $wordWidth = $pdf->GetStringWidth($word); // Get the width of the current word
    // Check if adding the current word exceeds the maximum width
    if ($currentX + $wordWidth > $maxWidth) {
        $currentY += 5; // Move to the next line
        $currentX = 28; // Reset X position
    }
    // Write the word
    $pdf->SetFont('Helvetica', '', 11);
    $pdf->SetXY($currentX, $currentY);
    $pdf->Write(0, $word . ' ');
    $currentX += $wordWidth + 1; // Update X position for the next word
}



// $pdf->SetXY(28, 80);
// $pdf->Write(0, $company_address);

$pdf->SetXY(28, 95);
$pdf->Write(0,$city . ', ' . $state . ', ' . $pincode);

// $pdf->SetXY(155, 102);
// $pdf->Write(0, $distributorship_area);


$maxWidth = 190; // Maximum width allowed for the text
$currentX = 155; // Initial X position
$currentY = 102; // Initial Y position

// $distributorship_area = "Your company address"; // Replace this with the actual company address
$words = explode(' ', $distributorship_area); // Split the company address into words

foreach ($words as $word) {
    $wordWidth = $pdf->GetStringWidth($word); // Get the width of the current word
    // Check if adding the current word exceeds the maximum width
    if ($currentX + $wordWidth > $maxWidth) {
        $currentY += 5; // Move to the next line
        $currentX = 28; // Reset X position
    }
    // Write the word
    $pdf->SetFont('Helvetica', '', 11);
    $pdf->SetXY($currentX, $currentY);
    $pdf->Write(0, $word . ' ');
    $currentX += $wordWidth + 1; // Update X position for the next word
}


$pdf->AddPage();
$pdf->setSourceFile('pdf/di_appo.pdf');
$tplIdx = $pdf->importPage(6);
$pdf->useTemplate($tplIdx, 0, 0, 215);

$pdf->AddPage();
$pdf->setSourceFile('pdf/di_appo.pdf');
$tplIdx = $pdf->importPage(7);
$pdf->useTemplate($tplIdx, 0, 0, 215);

// $pdf->AddPage();
// $pdf->setSourceFile('pdf/di_appo.pdf');
// $tplIdx = $pdf->importPage(8);
// $pdf->useTemplate($tplIdx, 0, 0, 215);


$pdf->SetFont('Helvetica');
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(40, 30);
// $pdf->Write(0, 'This is just a simple text');

$pdf->Output($company_name.'_'.$time.'.pdf', 'D');

$data = "INSERT INTO `distributor_form`(`company_name`, `company_address`, `pincode`, `city`, `state`, `telephone`, `mobile`, `email`, `comp_name`, `gst`, `names`, `desigs`, `names1`, `desigs1`, `dob`, `doa`, `business_type`, `namer1`, `numbr1`, `addrr1`, `namer2`, `numbr2`, `addrr2`, `namess`, `num`, `annual_turnover`, `agencies_held`, `distributorship_area`, `datetime`) 
         VALUES ('$company_name', '$company_address', '$pincode', '$city', '$state', '$telephone', '$mobile', '$email', '$comp_name', '$gst', '$names', '$desigs', '$names1', '$desigs1', '$dob', '$doa', '$business_type', '$namer1', '$numbr1', '$addrr1', '$namer2', '$numbr2', '$addrr2', '$namess', '$num', '$annual_turnover', '$agencies_held', '$distributorship_area', '$time')";


$result = $conn->query($data);

if ($result) {
    // Data inserted successfully
} else {
    // Handle the error, e.g., display error message or log it
    echo "Error: " . $conn->error;
}

?>