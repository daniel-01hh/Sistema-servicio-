<?php
      $numreporte = $_POST['numreporte'];
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
     $actualizar = "UPDATE $tbl_name SET NumReporte='$numreporte', Mes='$mes', HorasReportadas='$horasreportadas', Periodo='$periodo', Actividades='$actividades', Observaciones='$observaciones', Matricula='$matricula' WHERE NumReporte = '$numreporte'";

     if ($conexion->query($actualizar) === TRUE) {
        echo "<br />"."<h2>"."Reporte editado Exitosamente!"."</h2>";
     }
     else {
        echo "Error al editar reporte.".$buscarUsuario."<br>".$conexion->error;
     }
     header('Location: http://localhost/ProOnliPc-Inicio/reportes.php');
     mysqli_close($conexion);
?>
