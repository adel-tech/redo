<?php

include 'connection.php';

require 'fpdf182/fpdf.php';

if (isset($_GET['consultation_pdf'])) {
  $no=$_GET['consultation_pdf'];
  $res=mysqli_query($conn,"SELECT * FROM daily WHERE no='$no'");
  $row=mysqli_fetch_array($res);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",20);
$pdf->Cell(100,20,"Dr. Rao's Clinic",0,1,"C");
$pdf->SetFont("Arial","B",12);
$pdf->Cell(50,10,"Name :",0,0);
$pdf->Cell(50,10,$row['name'],0,1);
$pdf->Cell(50,10,"Age :",0,0);
$pdf->Cell(50,10,$row['age'],0,1);
$pdf->Cell(50,10,"Date :",0,0);
$pdf->Cell(50,10,$row['date'],0,1);
$pdf->Cell(50,10,"Token :",0,0);
$pdf->Cell(50,10,$row['code'],0,1);

$pdf->Cell(50,10,"Consultation Details:",0,1);
$pdf->line(5,80,205,80);
$pdf->ln(5);
$pdf->Cell(50,10,$row['consultation'],0,0);
$pdf->line(5,200,205,200);
$pdf->Output();


}
?>
<a class="float-right" href="logout.php">Logout</a>
