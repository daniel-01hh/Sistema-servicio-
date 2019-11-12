<?php
  $matricula = $_POST['matricula'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $correo = $_POST['correo'];
  $telefono = $_POST['telefono'];
  $contrasena = $_POST['contrasena'];
  $usuario = $_POST['usuario'];

  
 $host = "85.10.205.173:3306";
 $user_db = "jorgeasantiago";
 $pass_db = "lucho1234";
 $db_name = "serviciosocial01";
 $tbl_name = "alumno";

 $conexion = new mysqli($host, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 $buscarUsuario = "SELECT * FROM $tbl_name WHERE matricula = '$matricula' ";
 $result = $conexion->query($buscarUsuario);
 
 $count = mysqli_num_rows($result);

 
 if ($count == 1) {
    
    $var = "El Nombre de Usuario ya a sido tomado";
    echo "<script> alert('".$var."'); </script>";
    
 /*echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";
 echo "<a>Por favor escoga otro Nombre</a>";*/
 }else{
    $query = "INSERT INTO alumno (Matricula, Nombre, Apellido, Correo, Telefono, Contraseña, Usuario, NumFormulario, NumSolicitante, TotalReportes, TotalHoras)
           VALUES ('$matricula', '$nombre', '$apellido', '$correo', '$telefono', '$contrasena', '$usuario', '0', '1', '0', '0')";

    if ($conexion->query($query) === TRUE) {
        $var2 = "Usuario Creado Exitosamente!";
        echo "<script> alert('".$var2."'); </script>";
    }else {
        $var3 = "Usuario Creado Exitosamente!";
        echo "<script> alert('".$var3."'); </script>";
    }
 }
 mysqli_close($conexion);
?>