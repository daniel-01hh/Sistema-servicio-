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

$consulta = "select * from alumno where Matricula='$user'";
$resultado = $conexion->query($consulta);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
$nombre = $row['Nombre'];
$titulo = "Formulario del alumno";



require('fpdf181/fpdf.php');

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
     $user = $_GET['numero'];
 $host = "85.10.205.173:3306";
 $user_db = "jorgeasantiago";
 $pass_db = "lucho1234";
 $db_name = "serviciosocial01";

 $conexion = new mysqli($host, $user_db, $pass_db, $db_name);


  if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
   }

$consulta = "select * from alumno where Matricula='$user'";
$resultado = $conexion->query($consulta);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
$nombre = $row['Nombre'];
$ApellidoP = $row['ApellidoP'];
$ApellidoM = $row['ApellidoM'];
$titulo = "Formulario del alumno " . $nombre . " " . $ApellidoP . " " . $ApellidoM;
    $this->Cell(70,10, utf8_decode($titulo),0,0,'C');
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
//for($i=1;$i<=40;$i++)
    //$pdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);

while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(45);
    $pdf->SetFont('Arial','B',20);
    $pdf->Cell(100, 10, 'Matricula', 1, 1, 'C', 0);
    $pdf->Cell(45);
    $pdf->SetFont('Times','',12);
	$pdf->Cell(100, 10, $row['Matricula'], 1, 1, 'C', 0);

    $pdf->Cell(45);
    $pdf->SetFont('Arial','B',20);
    $pdf->Cell(100, 10, 'Promedio', 1, 1, 'C', 0);
    $pdf->Cell(45);
    $pdf->SetFont('Times','',12);
	$pdf->Cell(100, 10, $row['Promedio'], 1, 1, 'C', 0);

    $pdf->Cell(45);
    $pdf->SetFont('Arial','B',20);
    $pdf->Cell(100, 10, 'Semestre', 1, 1, 'C', 0);
	$pdf->Cell(45);
    $pdf->SetFont('Times','',12);
    $pdf->Cell(100, 10, $row['Semestre'], 1, 1, 'C', 0);

    $pdf->Cell(45);
    $pdf->SetFont('Arial','B',20);
    $pdf->Cell(100, 10, 'Creditos', 1, 1, 'C', 0);
	$pdf->Cell(45);
    $pdf->SetFont('Times','',12);
    $pdf->Cell(100, 10, $row['Creditos'], 1, 1, 'C', 0);

    $pdf->Cell(45);
    $pdf->SetFont('Arial','B',20);
    $pdf->Cell(100, 10, 'Habilidades', 1, 1, 'C', 0);
	$pdf->Cell(45);
    $pdf->SetFont('Times','',12);
    $pdf->Cell(100, 30, utf8_decode($row['Habilidades']), 1, 1, 'C', 0);

    $pdf->Cell(45);
    $pdf->SetFont('Arial','B',20);
    $pdf->Cell(100, 10, 'Primera Opcion', 1, 1, 'C', 0);
	$pdf->Cell(45);
    $pdf->SetFont('Times','',12);
    $pdf->Cell(100, 10, utf8_decode($row['PrimeraOp']), 1, 1, 'C', 0);

    $pdf->Cell(45);
    $pdf->SetFont('Arial','B',20);
    $pdf->Cell(100, 10, 'Segunda Opcion', 1, 1, 'C', 0);
	$pdf->Cell(45);
    $pdf->SetFont('Times','',12);
    $pdf->Cell(100, 10, utf8_decode($row['SegundaOp']), 1, 1, 'C', 0);

    $pdf->Cell(45);
    $pdf->SetFont('Arial','B',20);
    $pdf->Cell(100, 10, 'Tercera Opcion', 1, 1, 'C', 0);
	$pdf->Cell(45);
    $pdf->SetFont('Times','',12);
    $pdf->Cell(100, 10, utf8_decode($row['TerceraOp']), 1, 1, 'C', 0);
}

$pdf->Output();
?>