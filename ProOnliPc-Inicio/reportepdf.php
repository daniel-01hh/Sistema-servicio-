<?php
 $user = $_POST['alumno'];
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
$mes = $_POST['mes'];
$horasrepo = $_POST['horasreportadas'];
$reporte = $row['TotalReportes']+1;
$horast =  $row['TotalHoras'];
$numeroSS = $row['NumSolicitante'];

$consultaencargado = "select * from solicitante where NumSolicitante='$numeroSS'";
$resultadoc = $conexion->query($consultaencargado);
$row = $resultadoc->fetch_array(MYSQLI_ASSOC);
$Encargado = $row['Encargado'];



require('fpdf181/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',14);


    // Título
 $user = $_POST['alumno'];
 $mes = $_POST['mes'];
 $horasrepo = $_POST['horasreportadas'];
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
$reporte = $row['TotalReportes']+1;
$horast =  $row['TotalHoras'];
$numeroSS = $row['NumSolicitante'];

$consultaencargado = "select * from solicitante where NumSolicitante='$numeroSS'";
$resultadoc = $conexion->query($consultaencargado);
$row = $resultadoc->fetch_array(MYSQLI_ASSOC);
$Encargado = $row['Encargado'];



    // Movernos a la derecha
    $this->Cell(95);
    $this->Cell(70,10, "Universidad Veracruzana",0,0,'C');
    $this->Ln(7);
    $this->Cell(95);
    $this->Cell(70,10, "Facultad de Estadistica e Informatica",0,0,'C');
    $this->Ln(10);

    $this->SetFont('Arial','',14);
    $this->Cell(95);
    $this->Cell(70,10, "Reporte mensual de servicio social",0,0,'C');

    $this->Ln(7);
    $this->SetFont('Arial','',14);
    $this->Cell(95);
    $this->Cell(70,10, "Periodo Agosto 2019-Enero 2020",0,0,'C');

    $this->Ln(10);
    $this->SetFont('Arial','B',12);
    $this->SetLeftMargin(210);
    $this->Cell(70,10, "No. Reporte: " . $reporte ,0,0,'C');

    $this->SetLeftMargin(10);
    $this->Ln(6);
    $this->SetFont('Arial','B',12);
    $this->Cell(1);
    $this->Cell(70,10, "Mes: " . $mes,0,0,'C');

    $this->SetLeftMargin(90);
    $this->SetFont('Arial','B',12);
    $this->Cell(15);
    $this->Cell(70,10, "Horas Reportadas: " . $horasrepo,0,0,'C');

    $this->SetLeftMargin(10);
    $this->SetFont('Arial','B',12);
    $this->Cell(35);
    $this->Cell(70,10, "Horas Acumuladas: " . $horast ,0,0,'C');
    
    $this->SetLeftMargin(30);
    $this->Ln(6);
    $this->SetFont('Arial','B',12);
    $this->Cell(70,10, "Nombre del alumno: " . $nombre . " " . $ApellidoP. " " . $ApellidoM ,0,0,'C');

    $this->SetLeftMargin(59);
    $this->Ln(6);
    $this->SetFont('Arial','B',12);
    $this->Cell(70,10, utf8_decode("Nombre del responsable directo del servicio social: " . $Encargado) ,0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(10);
    $this->SetRightMargin(200);


    $this->SetY(190);
    $this->SetFont('Arial','B',12);
    $this->SetX(105);
    $this->Cell(70,10, utf8_decode("Fredy Castañeda Sanchez"),0,0,'C');


    $this->SetY(177);
    $this->SetFont('Arial','B',12);
    $this->SetX(105);
    $this->Cell(70,10, "Recibio",0,0,'C');

    $this->SetY(85);

    $this->Image('img/uv.jpg',5,7,-200);
    $this->Image('img/fei.jpg', 220,7,-200);
}



}

$consulta = "select * from formulario where Matricula='$user'";
$resultado = $conexion->query($consulta);
$row = $resultado->fetch_array(MYSQLI_ASSOC);

$p1 = $_POST['p1'];
$a1 = $_POST['a1'];
$o1 = $_POST['o1'];
$p2 = $_POST['p2'];
$a2 = $_POST['a2'];
$o2 = $_POST['o2'];
$p3 = $_POST['p3'];
$a3 = $_POST['a3'];
$o3 = $_POST['o3'];
$p4 = $_POST['p4'];
$a4 = $_POST['a4'];
$o4 = $_POST['o4'];
$p5 = $_POST['p5'];
$a5 = $_POST['a5'];
$o5 = $_POST['o5'];
$p6 = $_POST['p6'];
$a6 = $_POST['a6'];
$o6 = $_POST['o6'];

// Creación del objeto de la clase heredada
$pdf = new PDF('L','mm',array(279,216));
$pdf->AliasNbPages();
$pdf->AddPage();
//for($i=1;$i<=40;$i++)
    //$pdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);

    $pdf->SetX(23);
    $pdf->Cell(50, 10, 'Periodo', 1, 0, 'C', 0);
    $pdf->Cell(150, 10, 'Actividad', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'Observaciones', 1, 1, 'C', 0);

    $pdf->SetX(23);
    $pdf->Cell(50, 10, '' . $p1, 1, 0, 'C', 0);
    $pdf->Cell(150, 10, '' . $a1, 1, 0, 'C', 0);
    $pdf->Cell(40, 10,  '' . $o1, 1, 1, 'C', 0);

    $pdf->SetX(23);
    $pdf->Cell(50, 10,  '' . $p2, 1, 0, 'C', 0);
    $pdf->Cell(150, 10,  '' . $a2, 1, 0, 'C', 0);
    $pdf->Cell(40, 10,  '' . $o2, 1, 1, 'C', 0);

    $pdf->SetX(23);
    $pdf->Cell(50, 10,  '' . $p3, 1, 0, 'C', 0);
    $pdf->Cell(150, 10,  '' . $a3, 1, 0, 'C', 0);
    $pdf->Cell(40, 10,  '' . $o3, 1, 1, 'C', 0);

    $pdf->SetX(23);
    $pdf->Cell(50, 10,  '' . $p4, 1, 0, 'C', 0);
    $pdf->Cell(150, 10,  '' . $a4, 1, 0, 'C', 0);
    $pdf->Cell(40, 10,  '' . $o4, 1, 1, 'C', 0);

    $pdf->SetX(23);
    $pdf->Cell(50, 10,  '' . $p5, 1, 0, 'C', 0);
    $pdf->Cell(150, 10,  '' . $a5, 1, 0, 'C', 0);
    $pdf->Cell(40, 10,  '' . $o5, 1, 1, 'C', 0);

    $pdf->SetX(23);
    $pdf->Cell(50, 10,  '' . $p6, 1, 0, 'C', 0);
    $pdf->Cell(150, 10,  '' . $a6, 1, 0, 'C', 0);
    $pdf->Cell(40, 10,  '' . $o6, 1, 1, 'C', 0);

    $pdf->Line(50, 165, 100, 165);
    $pdf->Line(180, 165, 240, 165);
    $pdf->Line(110, 190, 170, 190);

    $pdf->Ln(11);
    $pdf->SetX(35);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(70,10, "" . $nombre . " " . $ApellidoP . " " . $ApellidoM ,0,0,'C');


    $pdf->SetX(175);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(70,10, utf8_decode($Encargado) ,0,0,'C');


$actividadesT = $a1. "\n" . $a2. "\n" . $a3. "\n" . $a4. "\n" . $a5. "\n" . $a6; 
$PeriodoT = $p1. "\n" . $p2. "\n" . $p3. "\n" . $p4. "\n" . $p5. "\n" . $p6;
$observacionesT = $o1. "\n" . $o2. "\n" . $o3. "\n" . $o4. "\n" . $o5. "\n" . $o6;

 //$query = "INSERT INTO reporte (NumReporte, Mes, HorasReportadas, Periodo, Actividades, Observaciones, Matricula)
   //        VALUES ('$reporte', '$mes', '$horasrepo', '$PeriodoT', '$actividadesT', '$observacionesT', '$user')";
     // if ($conexion->query($query) === TRUE) {

//        $horastotales = $horast + $horasrepo;

  //       $buscarUsuario = "UPDATE alumno SET TotalReportes=$reporte , TotalHoras= $horastotales WHERE Matricula = '$user'";

    //   $conexion->query($buscarUsuario);

        $pdf->Output();
          
    // }else {
        echo "Error al crear reporte.".$query."<br>".$conexion->error;
     //}






?>