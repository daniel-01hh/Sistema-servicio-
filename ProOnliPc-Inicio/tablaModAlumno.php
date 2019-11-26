<?php 

	$conexion=mysqli_connect('85.10.205.173:3306','jorgeasantiago','lucho1234','serviciosocial01');
  $matricula = $_GET['matricula'];
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
      	 <h1>Administrador</h1>
        <div class="actions">
          <a href="#RegistroAlumnos" class="btn-services">Editar informacion de alumnos</a>
       
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
          <h3 class="section-title">Editar informacion de alumnos</h3>
          <div class="section-title-divider"></div>
  <form action="editaralumno.php" method="post">

  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputAddress2">Matricula</label>
    <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Matricula" maxlength="9" minlength="9" required> 
  </div>
     <div class="form-group col-md-6">
      <label for="inputnombre4">Nombre(s)</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputAPaterno">Apellido Paterno </label>
      <input type="text" class="form-control" id="apellidoP" name="apellidop" placeholder="Apellido Paterno" required>
    </div>
    
    <div class="form-group col-md-6">
      <label for="inputAMaterno">Apellido Materno</label>
      <input type="text" class="form-control" id="apellidoM" name="apellidom" placeholder="Apellido Materno" required>
    </div>

    <div class="form-group col-md-6">
      <label for="inputAMaterno">Correo</label>
      <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electronico" required>
    </div>
  </div>

  <div class="form-group col-md-6">
    <label for="inputCorreo">Telefono</label>
    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono" maxlength="10" minlength="10" required>
  </div>
  <div class="form-group col-md-6">
    <label for="inputTelefono">Contraseña</label>
    <input type="text" class="form-control" id="contraseña" name="contraseña" placeholder="Contraseña" required>
  </div>
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

          <?php 
          $sql="SELECT Matricula,Nombre,ApellidoP,ApellidoM,Correo,Telefono, Contraseña,NumFormulario,NumSolicitante,TotalReportes,TotalHoras from alumno where Matricula= '$matricula'";
          $result=mysqli_query($conexion,$sql);

          while($mostrar=mysqli_fetch_array($result)){
          ?>

            <script>
            document.getElementById("matricula").value = "<?php echo $mostrar['Matricula'] ?>";
            document.getElementById("nombre").value = "<?php echo $mostrar['Nombre'] ?>";
            document.getElementById("apellidoP").value = "<?php echo $mostrar['ApellidoP'] ?>";
            document.getElementById("apellidoM").value = "<?php echo $mostrar['ApellidoM'] ?>";
            document.getElementById("correo").value = "<?php echo $mostrar['Correo'] ?>";
            document.getElementById("telefono").value = "<?php echo $mostrar['Telefono'] ?>";
            document.getElementById("contraseña").value = "<?php echo $mostrar['Contraseña'] ?>";
            </script>

          <?php
            }
           ?>

</body>

</html>
