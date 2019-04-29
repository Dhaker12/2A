<?php

include "../order.php";
require_once ('C:/wamp64/www/octopus/views/pdf/mc_table.php');

$e=0;
$i=0;
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Times","I",12);
$pdf->SetTextColor(124,112,103);
$pdf->MultiCell(0,10,"\n\n\n\n List of orders: \n\n");
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Times","",12);
$dbConnection = mysqli_connect('localhost', 'root', '', 'source_projet2a');

$query  = "SELECT * FROM orders ";
$result = mysqli_query($dbConnection, $query);

if (mysqli_num_rows($result) > 0) {

  $pdf->Cell(24,10,"reference",1,0);
  $pdf->Cell(30,10,"name",1,0);
  $pdf->Cell(25,10,"date",1,0);
  $pdf->Cell(40,10,"state",1,0);
  $pdf->Cell(40,10,"quantite",1,0);
  $pdf->Cell(40,10,"total",1,0);
  $pdf->Cell(40,10,"dstate",1,1);


    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
   	
		
										
        $reference = $row['reference'];
        $name = $row['name'];
        $date = $row['date'];
        $state=$row['state'];
        $quantite = $row['quantite'];
        $total = $row['total'];
        $dstate = $row['dstate'];

        if($e==0)
        {

        $pdf->Cell(24,10,"{$reference} ",2,0);
        $pdf->Cell(30,10,"{$name} ",2,0);
        $pdf->Cell(25,10,"{$date} ",3,0);
        $pdf->Cell(40,10,"{$state} ",3,0);
        $pdf->Cell(40,10,"{$quantite} ",4,0);
        $pdf->Cell(40,10,"{$total} ",4,0);
        $pdf->Cell(40,10,"{$dstate} ",5,1);


        }}



 }


$pdf->SetFont("Courier","B",9);

$pdf->output("order.pdf","");


header("Content-Type: application/pdf");
header("Content-Disposition: attachment;filename=order.pdf");
readfile("order.pdf");
unlink("order.pdf");
