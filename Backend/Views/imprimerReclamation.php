<?php
include "C:/wamp64/wamp64/www/Project/Backend/entities/reclamation.php";
require_once ('C:/wamp64/wamp64/www/Project/Backend/Views/pdf/mc_table.php');

$e=0;
$i=0;
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Times","I",12);
$pdf->SetTextColor(124,112,103);
$pdf->MultiCell(0,10,"\n\n\n\n Liste des reclamations: \n\n");
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Times","",12);
$dbConnection = mysqli_connect('localhost', 'root', '', 'web');

$query  = "SELECT * FROM reclamation ";
$result = mysqli_query($dbConnection, $query);

if (mysqli_num_rows($result) > 0) {
  $pdf->Cell(24,10,"numero",1,0);
  $pdf->Cell(30,10,"email",1,0);
  $pdf->Cell(25,10,"nom",1,0);
  $pdf->Cell(40,10,"prenom",1,0);
  $pdf->Cell(50,10,"date",1,1);


    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $numero = $row['numero'];
        $email = $row['email'];
        $nom = $row['nom'];
        $prenom=$row['prenom'];
        $date=$row['date'];

        if($e==0)
        {

        $pdf->Cell(24,10,"{$numero} ",1,0);
        $pdf->Cell(30,10,"{$email} ",1,0);
        $pdf->Cell(25,10,"{$nom} ",1,0);
        $pdf->Cell(40,10,"{$prenom} ",1,0);
        $pdf->Cell(50,10,"{$date} ",1,1);


        }



    } }


$pdf->SetFont("Courier","B",9);

$pdf->output("Reclamation.pdf","");


header("Content-Type: application/pdf");
header("Content-Disposition: attachment;filename=Reclamation.pdf");
readfile("Reclamation.pdf");
unlink("Reclamation.pdf");
