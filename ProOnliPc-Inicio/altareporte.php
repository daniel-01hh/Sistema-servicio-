<?php
  $numreporte = $_POST['numreporte'];
  $nreporte = $_POST['nreporte'];
  $mes = $_POST['mes'];
  $horasreportadas = $_POST['horasreportadas'];
  $periodo = $_POST['periodo'];
  $actividades = $_POST['actividades'];
  $observaciones = $_POST['observaciones'];
  $matricula = $_POST['matricula'];

  
 $host = "85.10.205.173:3306";
 $user_db = "jorgeasantiago";
 $pass_db = "lucho1234";
 $db_name = "serviciosocial01";
 $tbl_name = "reporte";

 $conexion = new mysqli($host, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 $buscarReport = "SELECT * FROM $tbl_name WHERE numreporte = '$numreporte' ";
 $result = $conexion->query($buscarReport);
 
 $count = mysqli_num_rows($result);

 
 if ($count == 1) {
    
    $var = "El reporte ya existe";
    echo "<script> alert('".$var."'); </script>";
 }else{
    $query = "INSERT INTO reporte (NumReporte, Mes, HorasReportadas, Periodo, Actividades, Observaciones, Matricula)
           VALUES ('$numreporte', '$mes', '$horasreportadas', '$periodo', '$actividades', '$observaciones', '$matricula')";
    if ($conexion->query($query) === TRUE) {
        echo "<br />"."<h2>"."El reporte fue Creado Exitosamente"."</h2>";
     }
     else {
        echo "Error al crear reporte.".$buscarUsuario."<br>".$conexion->error;
     }
     header('Location: http://localhost/ProOnliPc-Inicio/reportes.php');
     mysqli_close($conexion);
 }
 mysqli_close($conexion);
?>