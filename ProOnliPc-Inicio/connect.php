<?php
session_start();
?>

<?php
  $user = $_POST['first_name'];
  $pass = $_POST['email'];
  $host = "85.10.205.173:3306";
 $user_db = "jorgeasantiago";
 $pass_db = "lucho1234";
 $db_name = "serviciosocial01";
 $tbl_name = "administrador";
 $tbl_alumno = "alumno";
  
 $conexion = new mysqli($host, $user_db, $pass_db, $db_name);

  $conn = new mysqli($host, $user_db, $pass_db, $db_name);

  if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
   }

   
   $sql = "SELECT * FROM $tbl_alumno WHERE Matricula = '$user'";
   $result = $conexion->query($sql);
   if ($result->num_rows > 0) {     }
   $row = $result->fetch_array(MYSQLI_ASSOC);
   if ($pass==$row['Contraseña']) { 

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $user;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
    echo "Bienvenido! " . $_SESSION['username'];
    echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 
    header('Location: http://localhost/ProOnliPc-inicio/indexAlumno.html');//redirecciona a la pagina del usuario

 } else { 
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='index-form.html'>Volver a Intentarlo</a>";
 }





   $sql = "SELECT * FROM $tbl_name WHERE Usuario = '$user'";
   $result = $conexion->query($sql);
   if ($result->num_rows > 0) {     }
   $row = $result->fetch_array(MYSQLI_ASSOC);
   if ($pass==$row['Contraseña']) { 

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $user;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
    echo "Bienvenido! " . $_SESSION['username'];
    echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 
    header('Location: http://localhost/ProOnliPc-inicio/indexAdmin.html');//redirecciona a la pagina del usuario

 } else { 
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='index-form.html'>Volver a Intentarlo</a>";
 }


 mysqli_close($conexion); 


 ?>