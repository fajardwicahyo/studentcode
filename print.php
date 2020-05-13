<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
// instance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF();
// membuat halaman baru
$pdf->AddPage();
//pengaturan font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// membuat judul laporan
$pdf->Cell(190,7,'LAPORAN DATA MAHASISWA',0,1,'C');

// Memberikan jarak antara judul dan data
$pdf->Cell(10,7,'',0,1,'');

$pdf->SetFont('Arial','B',14);
$pdf->Cell(10,6,'No.',1,0,'C');
$pdf->Cell(30,6,'NIM',1,0,'C');
$pdf->Cell(50,6,'Nama Lengkap',1,0,'C');
$pdf->Cell(100,6,'Alamat',1,1,'C');

$pdf->SetFont('Arial','',12);

// looping data dari table
include 'connection.php';
$no = 1;
$result = mysqli_query($con, "SELECT *FROM mahasiswa");
while ($data = mysqli_fetch_array($result)){
	$pdf->Cell(10,6,$no++,1,0);
	$pdf->Cell(30,6,$data['nim'],1,0);
	$pdf->Cell(50,6,$data['nama'],1,0);
	$pdf->Cell(100,6,$data['alamat'],1,1);
}

$pdf->Output();
?>