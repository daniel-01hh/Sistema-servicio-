<?php 

	$conexion=mysqli_connect('85.10.205.173:3306','jorgeasantiago','lucho1234','serviciosocial01');
  $user = $_GET['alumno'];
  $sql="SELECT * from alumno where Matricula= '$user'";
  $result=mysqli_query($conexion,$sql);
  $row = $result->fetch_array(MYSQLI_ASSOC);

      function runMyFunction() {
       $message = "Error: Ya existe un formulario registrado con tu matricula";
       echo "<script type='text/javascript'>alert('$message');</script>";
     }

     if (isset($_GET['error'])) {
          runMyFunction();
       }


?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Administrador </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">




  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <script>
  		params = (new URL(document.location)).searchParams;
	  	x = params.get("matricula");

		if (x != null) {
      document.getElementById("matricula").value = x;
      location.href="http://localhost/ProOnliPc-inicio/tablaModAlumno.html?matricula=" + x; 
      
		}
  </script>

</head>

<body>
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <h1>Bienvenido alumno <?php echo $row['Nombre'] ?></h1>
      	 <h1>Formato de Solicitud</h1>
        <div class="actions">
          <a href="#RegistroAlumnos" class="btn-services">Llene los campos que le solicitan</a>
       
        <div class="actions">
        </div>
      </div>
    </div>
  </section>

  <!--==========================
 
  About Section
  ============================-->
  <section id="RegistroAlumnos">

    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Formato solicitud de servicio social</h3>
          <div class="section-title-divider"></div>


  <form action="formulario.php" method="post">
      <div class="form-row">

         <div class="form-group col-md-6">
          <label for="inputnombre4">Promedio aproximado: </label>
          <input type="number" class="form-control" id="promedio" name="promedio" placeholder="9.4" max="10" min="1" step="0.01" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputAPaterno">Semestre actual que estas cursando: </label>
          <input type="number" class="form-control" id="semestre" name="semestre" placeholder="7" min="5" max="11" step="1" required>
        </div>
        
        <div class="form-group col-md-6">
          <label for="inputAMaterno">Total de creditos que tienes actualmente: </label>
          <input type="number" class="form-control" id="creditos" name="creditos" placeholder="250" max="350" required>
        </div>
      
      <div class="form-group col-md-6">
        <label for="inputCorreo">Habilidades e Intereses personales que tienes: </label>
        <input type="text" class="form-control" id="habilidades" name="habilidades" placeholder="Programacion web, Desarrollo Movil" required>
      </div>

      </div>

      <div class="form-group col-md-6">
        <label for="inputTelefono">Primera opcion de servicio social</label>
        <br>
        <select name="primera">
              <?php 
              $sql="SELECT * from solicitante";
              $result=mysqli_query($conexion,$sql);
              while($mostrar=mysqli_fetch_array($result)){
              ?>
                <?php 
                    $mat = $mostrar['NumSolicitante'];
                ?>
                <option value="<?php echo $mostrar['NombreSolicitante'] ?>" ><?php echo $mostrar['NombreSolicitante'] ?></option>
            <?php 
            }
             ?>
        </select>
      </div>

      <div class="form-group col-md-6">
        <label for="inputTelefono">Segunda opcion de servicio social</label>
        <br>
        <select name="segunda">
              <?php 
              $sql="SELECT * from solicitante";
              $result=mysqli_query($conexion,$sql);
              while($mostrar=mysqli_fetch_array($result)){
              ?>
                <?php 
                    $mat = $mostrar['NumSolicitante'];
                ?>

                <option value="<?php echo $mostrar['NombreSolicitante'] ?>" ><?php echo $mostrar['NombreSolicitante'] ?></option>
            <?php 
            }
             ?>
        </select>
      </div>

        <div class="form-group col-md-6">
        <label for="inputTelefono">Tercera opcion de servicio social</label>
        <br>
        <select name="tercera">
              <?php 
              $sql="SELECT * from solicitante";
              $result=mysqli_query($conexion,$sql);
              while($mostrar=mysqli_fetch_array($result)){
              ?>
                <?php 
                    $mat = $mostrar['NumSolicitante'];
                ?>
                <option value="<?php echo $mostrar['NombreSolicitante'] ?>" ><?php echo $mostrar['NombreSolicitante'] ?></option>
            <?php 
            }
             ?>
        </select>
        </div>

                  <input type='hidden' name='matricula' value="<?php echo $user ?>"/> 
                  <button type="submit" class="btn btn-primary">Guardar</button> 
            


            </form>
           </div>        
          </div>
        </div>
  </section>

  

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>

</body>

</html>
