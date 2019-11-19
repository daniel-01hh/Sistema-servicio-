<?php
  $numero = $_POST['varnumero'];
  $promedio = $_POST['varpromedio'];
  $semestre = $_POST['varsemestre'];
  $creditos = $_POST['varcreditos'];
  $habilidades = $_POST['varhabilidades'];
  $primera = $_POST['varprimera'];
  $segunda = $_POST['varsegunda'];
  $tercera = $_POST['vartercera'];
  $matricula = $_POST['varmatricula'];
  
 $host = "85.10.205.173:3306";
 $user_db = "jorgeasantiago";
 $pass_db = "lucho1234";
 $db_name = "serviciosocial01";
 $tbl_name = "formulario";

 $conexion = new mysqli($host, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 $buscarUsuario = "SELECT * FROM $tbl_name WHERE NumFormulario = '$numero' ";
 $result = $conexion->query($buscarUsuario);
 
 $count = mysqli_num_rows($result);

 
 if ($count == 1) {
 echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";
 echo "<a href='index.html'>Por favor escoga otro Nombre</a>";
 }
 else{
 $query = "INSERT INTO formulario (NumFormulario, Promedio, Semestre, Creditos, Habilidades, PrimeraOp, SegundaOp, TerceraOp, Matricula)
           VALUES ('$numero', '$promedio', '$semestre', '$creditos', '$habilidades', '$primera', '$segunda', '$tercera', '$matricula')";

 if ($conexion->query($query) === TRUE) {
 echo "<br />" . "<h2>" . "Formulario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $numero . "</h4>" . "\n\n";
 echo "<h5>" . "Hacer Login: " . "<a href='login.html'>Login</a>" . "</h5>";
 }
 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;
   }
 }
 mysqli_close($conexion);
?>
