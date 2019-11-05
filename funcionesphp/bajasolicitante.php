<?php
    $numero = $_REQUEST['varnumero'];

    $host = "85.10.205.173:3306";
    $user_db = "jorgeasantiago";
    $pass_db = "lucho1234";
    $db_name = "serviciosocial01";
    $tbl_name = "solicitante";

    $conexion = new mysqli($host, $user_db, $pass_db, $db_name);
    if ($conexion->connect_error) {
        die("La conexion falló: " . $conexion->connect_error);
    }

    $query="DELETE from $tbl_name WHERE NumSolicitante = '$numero' ";
    if ($conexion->query($query) === TRUE) {
        echo "<br />" . "<h2>" . "Solicitante Eliminado Exitosamente!" . "</h2>";
    }else {
        echo "Error al eliminar solicitante." . $query . "<br>" . $conexion->error;
    }
    //}
    mysqli_close($conexion);   
<?