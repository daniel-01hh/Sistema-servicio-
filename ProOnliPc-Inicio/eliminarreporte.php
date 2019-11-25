<?php
    session_start();
?>

<?php
    $numreporte = $_GET['numreporte'];
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
    header('Location: http://localhost/ProOnliPc-Inicio/reportes.php');//redirecciona a la pagina del usuario
    mysqli_close($conexion); 

 ?>