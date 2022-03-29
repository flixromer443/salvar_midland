<?php
    require("../librerias/fpdf182/fpdf.php");
    include("../config/conexion.php");
    $pid=$_GET['pid'];
    $query="select * from partners where id='$pid'";
    $res=mysqli_query($link,$query);
    $row=mysqli_fetch_array($res);
    $query2="select a.activitie, a.price from partners_activities as pa inner join activities as a on a.id=pa.aid where pa.pid='$pid'";
    $res2=mysqli_query($link,$query2);
    
    

    
$pdf = new FPDF();
 // Arial bold 15
 
$hoy=getdate();

 $pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
 $pdf->SetX(150); 
 $pdf->Cell(40,10,''.$hoy['mday'].'/'.$hoy['mon'].'/'.$hoy['year']);

 $pdf->Ln(10);
 $pdf->Cell(40,10,'Socio: '.$row[1].' ');
 $pdf->Ln(10);
 $pdf->Cell(40,10,'Numero: '.$row[0].' ');
 $pdf->Ln(10);
 
 $pdf->Cell(40,10,'IVA: Consumidor Final  ');
 $pdf->SetX(120); 
 $pdf->Cell(40,10,'CUIT:99-99999999-99');
 $pdf->Ln(20);
$pdf->SetFont('Arial','B',14);
 $pdf->Cell(40,10,'Detalle');
 $pdf->SetX(50); 
 $pdf->Cell(40,10,'Fecha');
 $pdf->SetX(90); 
 $pdf->Cell(40,10,'Precio');
 $pdf->SetX(120);
 $pdf->Cell(40,10,'vencimiento');
 $pdf->Ln(10);
 $total=0;
 while($row2=mysqli_fetch_array($res2)){
    $total+=$row2[1];
    $pdf->Cell(40,10,$row2[0]);
    $pdf->SetX(50); 
    $pdf->Cell(40,10,$hoy['mday'].'/'.$hoy['mon'].'/'.$hoy['year']);
    $pdf->SetX(90); 
    $pdf->Cell(40,10,'$'.$row2[1]);
    $pdf->SetX(120);
    $pdf->Cell(40,10,$hoy['mday'].'/'.intval($hoy['mon']+1).'/'.$hoy['year']);
    $pdf->Ln(10);
 }
$pdf->SetFont('Arial','B',16);
$pdf->Ln(10);
$pdf->Cell(40,10,'TOTAL = $'.$total.' ');

 


 
$pdf->Output();
    ?>
