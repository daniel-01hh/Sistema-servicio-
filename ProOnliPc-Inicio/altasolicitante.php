<?php
  $nombre = $_POST['varnombre'];
  $direccion = $_POST['vardireccion'];
  $encargado = $_POST['varencargado'];
  $perfil = $_POST['varperfil'];
  $descripcion = $_POST['vardesc'];
  
 $host = "85.10.205.173:3306";
 $user_db = "jorgeasantiago";
 $pass_db = "lucho1234";
 $db_name = "serviciosocial01";
 $tbl_name = "solicitante";

 $conexion = new mysqli($host, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 $buscarUsuario = "SELECT * FROM $tbl_name WHERE NumSolicitante = '$numero' ";
 $result = $conexion->query($buscarUsuario);
 
 $count = mysqli_num_rows($result);

 
 if ($count == 1) {
 echo "<br />". "Los datos del solicitante ya existen." . "<br />";
 echo "<a href='index.html'>Por favor escoga otro Nombre</a>";
 }
 else{
 $query = "INSERT INTO solicitante (NombreSolicitante, Direccion, Encargado, PerfilSolicitado, Descripcion)
           VALUES ('$nombre', '$direccion', '$encargado', '$perfil', '$descripcion')";

 if ($conexion->query($query) === TRUE) {
  header('Location: http://localhost/ProOnliPc-inicio/indexAdmin.php?altaservicio=correcto');
 echo "<br />" . "<h2>" . "Solicitante Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $nombre . "</h4>" . "\n\n";
 echo "<h7>" . "Regresar" . "<a href='indexAdmin.php'>Login</a>" . "</h5>";
 }
 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;
   }
 }
 mysqli_close($conexion);
?>
