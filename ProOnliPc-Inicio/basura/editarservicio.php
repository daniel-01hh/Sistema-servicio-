<?php
  $matricula = $_POST['numero'];
  $nombre = $_POST['nombre'];
  $direccion = $_POST['direccion'];
  $encargado = $_POST['encargado'];
  $perfil = $_POST['perfil'];
  $descripcion = $_POST['descripcion'];

  
 $host = "85.10.205.173:3306";
 $user_db = "jorgeasantiago";
 $pass_db = "lucho1234";
 $db_name = "serviciosocial01";
 $tbl_name = "solicitante";

 $conexion = new mysqli($host, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 $buscarUsuario = "UPDATE $tbl_name SET NumSolicitante='$matricula', NombreSolicitante='$nombre', Direccion='$direccion', Encargado='$encargado', PerfilSolicitado='$perfil', Descripcion='$descripcion' WHERE NumSolicitante = '$matricula'";


 if ($conexion->query($buscarUsuario) === TRUE) {
 echo "<br />"."<h2>"."Usuario editado Exitosamente!"."</h2>";

 /*echo "<h4>"."Bienvenido: ".$nombre."</h4>"."\n\n";
 echo "<h5>"."Hacer Login: "."<a href='login.html'>Login</a>"."</h5>";
 echo"<script type=\"text/javascript\">alert('Los datos del alumno son correctos'); window.location='indexAdmin.html';</script>"; */
 }
 else {
 echo "Error al crear el usuario.".$buscarUsuario."<br>".$conexion->error;
 }
 header('Location: http://localhost/ProOnliPc-inicio/indexAdmin.php?editarservicio=correcto');
 mysqli_close($conexion);
?>
