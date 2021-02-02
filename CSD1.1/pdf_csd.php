<?php 
session_start();
include('FPDF/fpdf.php');



$connection = mysqli_connect("localhost","root","","aiti_results");
$query = "SELECT * FROM `csd1.1`";
$query_run = mysqli_query($connection, $query);





if (isset($_POST['btn_pdf']))
 {
     
     $pdf = new FPDF('p', 'mm', 'a4');
     $pdf->SetFont('arial', 'b', '12');
     $pdf->AddPage();
     $pdf->cell('20', '10', 'FOC', '1', '0', 'C');
     $pdf->cell('20', '10', 'HTML', '1', '0', 'C');
     $pdf->cell('45', '10', 'JAVASCRIPT', '1', '1', 'C');
     $pdf->cell('30', '10', 'DATABASE', '1', '0', 'C');
     $pdf->cell('30', '10', 'PYTHON', '1', '0', 'C');
     $pdf->cell('20', '10', 'SE', '1', '1', 'C');
     $pdf->cell('35', '10', 'STATUS', '1', '1', 'C');



    $pdf->SetFont('arial', '', '9');

    while ($row = mysqli_fetch_assoc($query_run)) 
    {
        $pdf->cell('20', '10', $row['foc'], '1', '0', 'C');
        $pdf->cell('20', '10', $row['html_css'], '1', '0', 'C');
        $pdf->cell('45', '10', $row['javascript'], '1', '1', 'C');
        $pdf->cell('30', '10', $row['oracle_database'], '1', '0', 'C');
        $pdf->cell('30', '10', $row['python'], '1', '0', 'C');
        $pdf->cell('20', '10', $row['se'], '1', '0', 'C');
        $pdf->cell('35', '10', $row['status'], '1', '1', 'C');
    }



     $pdf->Output();

 }








?>










