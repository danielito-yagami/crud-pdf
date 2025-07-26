<?php 
include('../../include/conexion/conexion.php');
require('../../include/fpdf/fpdf.php');


//conectando con la base de datos

$sql = 'SELECT p.idPersona,p.nombre,p.apellidoP,p.apellidoM,p.telefono,g.genero FROM personas as p INNER JOIN 
genero as g on(p.idGenero = g.idGenero) ORDER BY idPersona ASC';
$result = mysqli_query($conexion, $sql);




$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',20);
$pdf ->SetTextColor(0,50,190);
$pdf->Cell(100,10,'Reporte de consulta',0,1,'C');
#$pdf->Cell(50,5,'salto de linea',1,1);
$pdf->SetFont('Times','B',12);
#$pdf->MultiCell(190,5,'Texto de ejemplo con ñ.');
#$texto = utf8_decode('Texto de ejemplo con ñ.');
#$pdf->SetFont('Arial','B',10);
#$pdf->MultiCell(190,5,$texto);
//Imagen
$imagen = "../../../img/logomy.jpeg";
//Muestro la imagen dentro de la celda GetX y GetY dan las coordenadas, y el ultimo numero es el tamaño de la imagen
$pdf->Image($imagen, $pdf->GetX()+170, $pdf->GetY()-20,25);
//en esta parte va la consulta
$pdf->Ln(20);
//Color de texto
$pdf->SetTextColor(255,255,255);
//Relleno
$pdf->SetFillColor(0,234,0);
//Color de borde
$pdf->SetDrawColor(30,40,10);
$pdf->Cell(10,7,"id",1,0,'C',1);
$pdf->Cell(30,7,"Nombre",1,0,'C',1);
$pdf->Cell(40,7,"Apellido Paterno",1,0,'C',1);
$pdf->Cell(40,7,"Apellido Materno",1,0,'C',1);
$pdf->Cell(30,7,"Telefono",1,0,'C',1);
$pdf->Cell(20,7,"Genero",1,1,'C',1);
//Para los registro los colores
$pdf->SetTextColor(0,0,0);
//Relleno
$pdf->SetFillColor(0,234,0);
//Color de borde
$pdf->SetDrawColor(0,190,10);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
        //$pdf->Cell(100,10,$row['idPersona']." ".utf8_decode($row["nombre"])." ".utf8_decode($row["apellidoP"])." ".utf8_decode($row['apellidoM'])." ".$row['telefono'],1,1);
        $pdf->Cell(10,7,$row['idPersona'],1,0,'C',0);
        $pdf->Cell(30,7,iconv('UTF-8','ISO-8859-1',($row['nombre'])),1,0,'C',0);
        $pdf->Cell(40,7,iconv('UTF-8','ISO-8859-1',($row['apellidoP'])),1,0,'C',0);
        $pdf->Cell(40,7,iconv('UTF-8','ISO-8859-1',($row['apellidoM'])),1,0,'C',0);
        $pdf->Cell(30,7,$row['telefono'],1,0,'C',0);
        $pdf->Cell(20,7,$row['genero'],1,1,'C',0);

    }

 } else {
    #echo "0 resultados";
 }


/*
for($i=1;$i<=40;$i++){



    $pdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);
}*/
    // Muestra el documento
$pdf->Output();





?>


