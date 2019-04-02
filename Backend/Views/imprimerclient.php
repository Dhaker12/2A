<?php
include "../core/clientC.php";
$client1C=new ClientC();
//$list=$client1C->afficherclient();

require_once ('C:/wamp64/www/llll/octopus-master/octopus/pdf/mc_table.php');

$e=0;
$i=0;
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Times","I",12);
$pdf->SetTextColor(124,112,103);
$pdf->MultiCell(0,10,"\n\n\n\n List of clients: \n\n");
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Times","",12);
$dbConnection = mysqli_connect('localhost', 'root', '', 'projet');

$query  = "SELECT * FROM client ";
$result = mysqli_query($dbConnection, $query);

if (mysqli_num_rows($result) > 0) {

  $pdf->Cell(24,10,"firstname",1,0);
  $pdf->Cell(30,10,"lastname",1,0);
  $pdf->Cell(25,10,"address",1,0);
  /*$pdf->Cell(24,10,"companyname",1,0);
  $pdf->Cell(30,10,"town",1,0);*/
  $pdf->Cell(40,10,"email",1,1);
  /*$pdf->Cell(25,10,"phone",1,0);
  $pdf->Cell(40,10,"state",1,0);
  $pdf->Cell(24,10,"postcode",1,0);
  $pdf->Cell(30,10,"country",1,0);
  */
  


    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
   	
		
										
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $address = $row['address'];
        $email=$row['email'];
        /*$companyname = $row['companyname'];
        $town = $row['town'];
        $phone = $row['phone'];
        $state=$row['state'];
        $postcode = $row['postcode'];
        $country = $row['country'];*/
       
        

        if($e==0)
        {

        $pdf->Cell(24,10,"{$firstname} ",2,0);
        $pdf->Cell(30,10,"{$lastname} ",2,0);
        $pdf->Cell(25,10,"{$address} ",3,0);
        /*$pdf->Cell(24,10,"{$companyname}",1,0);
        $pdf->Cell(30,10,"{$town}",1,0);*/
        $pdf->Cell(40,10,"{$email} ",3,1);
        /*$pdf->Cell(25,10,"{$phone}",1,0);
        $pdf->Cell(40,10,"{$state}",1,0);
        $pdf->Cell(24,10,"{$postcode}",1,0);
        $pdf->Cell(30,10,"{$country}",1,0);*/


        }}



 }


$pdf->SetFont("Courier","B",9);

$pdf->output("client.pdf","");


header("Content-Type: application/pdf");
header("Content-Disposition: attachment;filename=client.pdf");
readfile("client.pdf");
unlink("client.pdf");
