<?php
  $promedio = $_POST['promedio'];
  $semestre = $_POST['semestre'];
  $creditos = $_POST['creditos'];
  $habilidades = $_POST['habilidades'];
  $primera = $_POST['primera'];
  $segunda = $_POST['segunda'];
  $tercera = $_POST['tercera'];
  $matricula = $_POST['matricula'];
  
 $host = "85.10.205.173:3306";
 $user_db = "jorgeasantiago";
 $pass_db = "lucho1234";
 $db_name = "serviciosocial01";
 $tbl_name = "formulario";

 $conexion = new mysqli($host, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 $buscarUsuario = "SELECT * FROM $tbl_name WHERE matricula = '$matricula' ";
 $result = $conexion->query($buscarUsuario);
 
 $count = mysqli_num_rows($result);

 
 if ($count == 1) {
 echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";
 echo "<a href='index.html'>Por favor escoga otro Nombre</a>";
 header('Location: http://localhost/ProOnliPc-inicio/Solicitud.php?alumno=' . $matricula . '&error=1');
 }
 else{
 $query = "INSERT INTO formulario (Promedio, Semestre, Creditos, Habilidades, PrimeraOp, SegundaOp, TerceraOp, Matricula)
           VALUES ('$promedio', '$semestre', '$creditos', '$habilidades', '$primera', '$segunda', '$tercera', '$matricula')";

 if ($conexion->query($query) === TRUE) {
 echo "<br />" . "<h2>" . "Formulario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $matricula . "</h4>" . "\n\n";
 echo "<h5>" . "Hacer Login: " . "<a href='login.html'>Login</a>" . "</h5>";


$buscarUsuario = "SELECT NumFormulario FROM $tbl_name WHERE matricula = '$matricula' ";
 $result = $conexion->query($buscarUsuario);
   $row = $result->fetch_array(MYSQLI_ASSOC);

  $form = $row['NumFormulario'];

  $update = "UPDATE alumno SET NumFormulario='$form' WHERE Matricula = '$matricula'";
$resultado = $conexion->query($update);

 header('Location: http://localhost/ProOnliPc-inicio/indexAlumnos.php?alumno=' . $matricula . '&formulario=correcto');

 } else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;
   }
 }
 mysqli_close($conexion);
?>
