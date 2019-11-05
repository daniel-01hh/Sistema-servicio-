<?php
    $numreporte = $_POST['varnumreporte'];
    $mes = $_POST['varmes'];
    $horas = $_POST['varhoras'];
    $periodo = $_POST['varperiodo'];
    $actividades = $_POST['varactividades'];
    $matricula = $_POST['varmatricula'];
  
    $host = "85.10.205.173:3306";
    $user_db = "jorgeasantiago";
    $pass_db = "lucho1234";
    $db_name = "serviciosocial01";
    $tbl_name = "reporte";

    $conexion = new mysqli($host, $user_db, $pass_db, $db_name);
    if ($conexion->connect_error) {
        die("La conexion falló: " . $conexion->connect_error);
    }
    $buscarUsuario = "SELECT * FROM $tbl_name WHERE NumReporte = '$numreporte' ";
    $result = $conexion->query($buscarUsuario);
 
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo "<br />". "El reporte ya existe." . "<br />";
        echo "<a href='index.html'>Por favor crea otro reporte</a>";
    }else{
        $query = "INSERT INTO reporte (NumReporte, Mes, Horas, Periodo, Actividades, Matricula)
           VALUES ('$numreporte', '$mes', '$horas', '$periodo', '$actividades', '$matricula')";
        if ($conexion->query($query) === TRUE) {
            echo "<br />" . "<h2>" . "Reporte Creado Exitosamente!" . "</h2>";
        }else {
            echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;
        }
    }
    mysqli_close($conexion);
?>