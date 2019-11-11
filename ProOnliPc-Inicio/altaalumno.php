<?php
  $matricula = $_POST['varmatricula'];
  $nombre = $_POST['varnombre'];
  $apellido = $_POST['varapellido'];
  $correo = $_POST['varcorreo'];
  $telefono = $_POST['vartelefono'];
  $contrasena = $_POST['varcontrasena'];
  $usuario = $_POST['varusuario'];

  
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
    echo “<script language=’javascript’>alert(’El registro fue guardado correctamente.’)</script>”;
    exit;
 }else{
    $query = "INSERT INTO alumno (Matricula, Nombre, Apellido, Correo, Telefono, Contrasena, Usuario, NumFormulario, NumSolicitante, TotalReportes, TotalHoras)
           VALUES ('$matricula', '$nombre', '$apellido', '$correo', '$telefono', '$contrasena', '$usuario', '0', '1', '0', '0')";
     if ($conexion->query($query) === TRUE) {
        echo "<br />"."<h2>"."Usuario Creado Exitosamente!"."</h2>";
 /*echo "<h4>"."Bienvenido: ".$nombre."</h4>"."\n\n";
 echo "<h5>"."Hacer Login: "."<a href='login.html'>Login</a>"."</h5>";*/
     }else {
         echo “<script language=’javascript’>alert(’Error al crear el usuario.’)</script>”;
         exit;
         echo "Error al crear el usuario.".$query."<br>".$conexion->error;
     }
 }
 mysqli_close($conexion);
?>
