<?php
    session_start();
?>

<?php
    $user = $_GET['alumno'];
    $numreporte = $_GET['nreporte'];
    $host = "85.10.205.173:3306";
    $user_db = "jorgeasantiago";
    $pass_db = "lucho1234";
    $db_name = "serviciosocial01";
    $tbl = "reporte";
  
    $conexion = new mysqli($host, $user_db, $pass_db, $db_name);
    $conn = new mysqli($host, $user_db, $pass_db, $db_name);
    if ($conexion->connect_error) {
        die("La conexion falló: " . $conexion->connect_error);
    }

    $delete = "delete FROM $tbl WHERE 	NumReporte = '$numreporte'";
    $result = $conexion->query($delete);
    header('Location: http://localhost/ProOnliPc-Inicio/reportes.php?alumno='. $user . "&eliminado=1");//redirecciona a la pagina del usuario
    mysqli_close($conexion); 

 ?>