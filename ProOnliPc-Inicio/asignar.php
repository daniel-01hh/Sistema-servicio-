<?php
  $matricula = $_POST['matricula'];
  $servicio = $_POST['NombreSolicitante'];


  
 $host = "85.10.205.173:3306";
 $user_db = "jorgeasantiago";
 $pass_db = "lucho1234";
 $db_name = "serviciosocial01";
 $tbl_name = "alumno";

 $conexion = new mysqli($host, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

  $datosalumno = "select * from solicitante WHERE  NombreSolicitante= '$servicio'";
  $result = $conexion->query($datosalumno);
  $row = $result->fetch_array(MYSQLI_ASSOC);
  $numero = $row['NumSolicitante'];

 $buscarUsuario = "UPDATE $tbl_name SET NumSolicitante='$numero' WHERE matricula = '$matricula'";


 if ($conexion->query($buscarUsuario) === TRUE) {
 echo "<br />"."<h2>"."Usuario asignado Exitosamente!"."</h2>";
  header('Location: http://localhost/ProOnliPc-inicio/indexAdmin.php?asignaralumno=correcto');

 /*echo "<h4>"."Bienvenido: ".$nombre."</h4>"."\n\n";
 echo "<h5>"."Hacer Login: "."<a href='login.html'>Login</a>"."</h5>";
 echo"<script type=\"text/javascript\">alert('Los datos del alumno son correctos'); window.location='indexAdmin.html';</script>"; */
 }
 else {
 echo "Error al crear el usuario.".$buscarUsuario."<br>".$conexion->error;
 }

 mysqli_close($conexion);
?>

