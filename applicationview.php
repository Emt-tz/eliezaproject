<?php

ob_start();
error_reporting(0);
include "dbconnection.php";
$NAME = $_GET['NAME'];
######################################ONE################################################
$res = mysqli_query($con, "SELECT policyfname,dob,nationality,occupation,HomeAddress,email FROM motor_vehicle_application");

$header = mysqli_query($con, "SELECT UCASE(`COLUMN_NAME`)

FROM `INFORMATION_SCHEMA`.`COLUMNS`

WHERE `TABLE_NAME`='motor_vehicle_application'

AND `COLUMN_NAME` in ('policyfname','dob','nationality','occupation','HomeAddress','email')");
###########################################TWO####################################################
$res1 = mysqli_query($con, "SELECT period,nida,fav_language,fname,regno,chasis FROM motor_vehicle_application");

$header1 = mysqli_query($con, "SELECT UCASE(`COLUMN_NAME`)

FROM `INFORMATION_SCHEMA`.`COLUMNS`

WHERE `TABLE_NAME`='motor_vehicle_application'

AND `COLUMN_NAME` in ('period','nida','fav_language','fname','regno','chasis')");
###############################################################################################
$res2 = mysqli_query($con, "SELECT engno,manf,est,make,cubic,capacity FROM motor_vehicle_application");

$header2 = mysqli_query($con, "SELECT UCASE(`COLUMN_NAME`)

FROM `INFORMATION_SCHEMA`.`COLUMNS`

WHERE `TABLE_NAME`='motor_vehicle_application'

AND `COLUMN_NAME` in ('engno','manf','est','make','cubic','capacity')");
###################################################################################################
$res3 = mysqli_query($con, "SELECT dpurchase,paymode,Amount,vehicle1,datecompl FROM motor_vehicle_application");

$header3 = mysqli_query($con, "SELECT UCASE(`COLUMN_NAME`)

FROM `INFORMATION_SCHEMA`.`COLUMNS`

WHERE `TABLE_NAME`='motor_vehicle_application'

AND `COLUMN_NAME` in ('dpurchase','paymode','Amount','vehicle1','datecompl')");


######################################THREE#######################################################

require_once 'fpdf/fpdf.php';
class PDF extends FPDF
{
// Page header
function Header()
{
    
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Title',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$pdf = new PDF('L');

$pdf->AddPage();

$pdf->SetFont('helvetica', '', 10);

#####################################

foreach ($header as $heading) {

    foreach ($heading as $column_heading) {
        $pdf->Cell(45, 12, $column_heading, 1);
      
    }

}

foreach ($res as $row) {

    $pdf->Ln();

    foreach ($row as $column) {
        $pdf->Cell(45, 12, $column, 1);
    }

}
###############################################
$pdf->Ln();
$pdf->Ln();
#####################################
foreach ($header1 as $heading) {

    foreach ($heading as $column_heading) {
        $pdf->Cell(45, 12, $column_heading, 1);
      
    }

}

foreach ($res1 as $row) {

    $pdf->Ln();

    foreach ($row as $column) {
        $pdf->Cell(45, 12, $column, 1);
    }

}
##############################################
$pdf->Ln();
$pdf->Ln();
#####################################
foreach ($header2 as $heading) {

    foreach ($heading as $column_heading) {
        $pdf->Cell(45, 12, $column_heading, 1);
      
    }

}

foreach ($res2 as $row) {

    $pdf->Ln();

    foreach ($row as $column) {
        $pdf->Cell(45, 12, $column, 1);
    }

}
###############################################
$pdf->Ln();
$pdf->Ln();
#####################################
foreach ($header3 as $heading) {

    foreach ($heading as $column_heading) {
        $pdf->Cell(45, 12, $column_heading, 1);
      
    }

}

foreach ($res3 as $row) {

    $pdf->Ln();

    foreach ($row as $column) {
        $pdf->Cell(45, 12, $column, 1);
    }

}
#############################################33

$pdf->Output('$NAME', 'I');

ob_end_flush();
?>