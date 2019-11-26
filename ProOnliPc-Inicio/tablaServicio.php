<?php 

	$conexion=mysqli_connect('85.10.205.173:3306','jorgeasantiago','lucho1234','serviciosocial01');
  $matricula = $_GET['numero'];
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
          <a href="#RegistroAlumnos" class="btn-services">Editar informacion de Servicio Social</a>
       
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
          <h3 class="section-title">Servicio social</h3>
          <div class="section-title-divider"></div>
   <form action="editarservicio.php" method="post">
  <div class="form-row">
     <div class="form-group col-md-6">
      <label for="inputnombre4">Nombre del SS</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del Servicio Social" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputAPaterno">Dirección</label>
      <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" required>
    </div>
    
    <div class="form-group col-md-6">
      <label for="inputAMaterno">Encargado del SS</label>
      <input type="text" class="form-control" id="encargado" name="encargado" placeholder="Encargado del servicio" required>
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputCorreo">Perfil solicitado</label>
    <input type="text" class="form-control" id="perfil" name="perfil" placeholder="Perfil" required>
  </div>
  <div class="form-group col-md-6">
    <label for="inputTelefono">Descripción</label>
     <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" required>
  </div>
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
          $sql="SELECT NumSolicitante,NombreSolicitante,Direccion,Encargado,PerfilSolicitado,Descripcion from solicitante where NumSolicitante= '$matricula'";
          $result=mysqli_query($conexion,$sql);

          while($mostrar=mysqli_fetch_array($result)){
          ?>

            <script>
            document.getElementById("nombre").value = "<?php echo $mostrar['NombreSolicitante'] ?>";
            document.getElementById("direccion").value = "<?php echo $mostrar['Direccion'] ?>";
            document.getElementById("encargado").value = "<?php echo $mostrar['Encargado'] ?>";
            document.getElementById("perfil").value = "<?php echo $mostrar['PerfilSolicitado'] ?>";
            document.getElementById("descripcion").value = "<?php echo $mostrar['Descripcion'] ?>";

            </script>

          <?php
            }
           ?>



</body>

</html>
