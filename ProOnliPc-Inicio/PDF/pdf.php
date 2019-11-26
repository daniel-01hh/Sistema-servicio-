<?php
 $user = $_GET['numero'];
 $host = "85.10.205.173:3306";
 $user_db = "jorgeasantiago";
 $pass_db = "lucho1234";
 $db_name = "serviciosocial01";

 $conexion = new mysqli($host, $user_db, $pass_db, $db_name);


  if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
   }


require('PDF/fpdf181/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Formulario',0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

function tabla(){


}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$consulta = "select * from formulario where Matricula='$user'";
$resultado = $conexion->query($consulta);

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(17, 10, 'Matricula', 1, 0, 'C', 0);
$pdf->Cell(17, 10, 'Promedio', 1, 0, 'C', 0);
$pdf->Cell(17, 10, 'Semestre', 1, 0, 'C', 0);
$pdf->Cell(17, 10, 'Creditos', 1, 0, 'C', 0);
$pdf->Cell(40, 10, 'Habilidades', 1, 0, 'C', 0);
$pdf->Cell(30, 10, 'PrimeraOp', 1, 0, 'C', 0);
$pdf->Cell(30, 10, 'SegundaOp', 1, 0, 'C', 0);
$pdf->Cell(30, 10, 'TerceraOp', 1, 1, 'C', 0);

$pdf->SetFont('Times','',8);
//for($i=1;$i<=40;$i++)
    //$pdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);

while ($row = $resultado->fetch_assoc()) {
	$pdf->Cell(17, 10, $row['Matricula'], 1, 0, 'C', 0);
	$pdf->Cell(17, 10, $row['Promedio'], 1, 0, 'C', 0);
	$pdf->Cell(17, 10, $row['Semestre'], 1, 0, 'C', 0);
	$pdf->Cell(17, 10, $row['Creditos'], 1, 0, 'C', 0);
	$pdf->Cell(40, 10, $row['Habilidades'], 1, 0, 'C', 0);
	$pdf->Cell(30, 10, $row['PrimeraOp'], 1, 0, 'C', 0);
	$pdf->Cell(30, 10, $row['SegundaOp'], 1, 0, 'C', 0);
	$pdf->Cell(30, 10, $row['TerceraOp'], 1, 1, 'C', 0);
}

$pdf->Output();
?>