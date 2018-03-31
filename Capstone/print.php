<?php
include 'dbcon.php';
$date = $_GET['view'];

					$sql="SELECT * FROM clientsorder WHERE pref_date='$date'";
					$query = mysqli_query($conn, $sql);
					$result = $conn->query($sql);
					if ($row = $result->fetch_assoc()) {
						$row = mysqli_fetch_assoc($query);
						$dbid = $row['id'];
						$dbname = $row['name'];
						$dbemail = $row['email'];				
						$dbdate = $row['pref_date'];
						$dbpackage = $row['packagetype'];			
						$dbtotal = $row['payment_total'];
						$dbreservation = $row['reservationamount'];
						$dbreservationdate= $row['reservationdate'];
						$dbpartialamount = $row['partialamount'];
						$dbpartialdate = $row['partialdate'];
						$dbfullamount = $row['fullamount'];
						$dbfulldate = $row['fulldate'];
						$dbbalance = $row['balance'];
						$dbtotalpayment = $row['totalpayment'];
					}	
?>

<?php

require('fpdf16/fpdf.php');

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10, "Customer's Name: $dbname");
$pdf->ln(5);
$pdf->Cell(40,10, "Customer's Email: $dbemail");
$pdf->ln(5);
$pdf->Cell(40,10, "Date of Event: $dbdate");
$pdf->ln(5);
$pdf->Cell(40,10, "Package: $dbpackage");
$pdf->ln(5);
$pdf->Cell(40,10, "Total Price: $dbtotal");
$pdf->ln(5);
$pdf->Cell(40,10, "Reservation Fee: $dbreservation");
$pdf->ln(5);
$pdf->Cell(40,10, "Reservation Fee Date of Payment: $dbreservationdate");
$pdf->ln(5);
$pdf->Cell(40,10, "Partial Amount: $dbpartialamount");
$pdf->ln(5);
$pdf->Cell(40,10, "Partial Amount Fee Date of Payment: $dbpartialdate");
$pdf->ln(5);
$pdf->Cell(40,10, "Amount Paid: $dbfullamount");
$pdf->ln(5);
$pdf->Cell(40,10, "Full Amount Date of Payment: $dbfulldate");
$pdf->ln(5);
$pdf->Cell(40,10, "Customer's Balance: $dbbalance");
$pdf->ln(5);
$pdf->Cell(40,10, "Total Cash Paid: $dbtotalpayment");

$pdf->ln(10);
$pdf->Cell(32,10,'___________________');
$pdf->ln(10);
$pdf->Cell(40,10,"Customer's Signature");
$pdf->ln(10);
$pdf->Cell(32,10,'___________________');
$pdf->ln(10);
$pdf->Cell(40,10,"Owner's Signature");




?>
