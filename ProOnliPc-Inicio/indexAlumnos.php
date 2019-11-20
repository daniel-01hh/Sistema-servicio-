<?php 

	$conexion=mysqli_connect('85.10.205.173:3306','jorgeasantiago','lucho1234','serviciosocial01');
  $user = $_GET['alumno'];
  $sql="SELECT * from alumno where Matricula= '$user'";
  $result=mysqli_query($conexion,$sql);
  $row = $result->fetch_array(MYSQLI_ASSOC);

      function runMyFunction() {
       $message = "formulario registrado correctamente";
       echo "<script type='text/javascript'>alert('$message');</script>";
     }

     if (isset($_GET['formulario'])) {
          runMyFunction();
       }


 ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>información usuarios </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">



  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="img/Logo.png" alt="ProOnliPc">
        </div>

        <h1>Bienvenido <?php echo $row['Nombre'] ?> a tus datos de servicio social</h1>
        <h2>Encontraras <span class="rotating">Total de horas, Lugares disponibles para servicio, algunas cosas mas</span></h2>
        <div class="actions">
          <a href="#Empresas" id="btnempresa" class="btn-get-started">Empresas</a>
          <a href="#solicitud" class="btn-get-started">Formatos</a>
          <a href="#Horas" class="btn-get-started">Horas Totales</a>
          <a href="index.html" class="btn-get-started">Cerrar Sesion</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
 
  About Section
  ============================-->
  <section id="ConsultarSS">
  <div class="container wow fadeInUp">
    <div class="row">
      <div class="col-md-12">
        <h3 class="section-title">Consultar Servicios </h3>
        <div class="section-title-divider"></div>
        <div class="card mb-3">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                <td>Numero Solicitante</td>
                <td>Nombre</td>
                <td>Direccion</td>
                <td>Encargado</td>
                <td>Perfil</td>	
                <td>Descripcion</td>
                </tr>
              </thead>
              <tbody>
              <?php 
          $sql="SELECT * from solicitante";
          $result=mysqli_query($conexion,$sql);

          while($mostrar=mysqli_fetch_array($result)){
           ?>

          <tr>
                <?php 
                $mat = $mostrar['NumSolicitante'];
                ?>
            <td><?php echo $mostrar['NumSolicitante'] ?></td>
            <td><?php echo $mostrar['NombreSolicitante'] ?></td>
            <td><?php echo $mostrar['Direccion'] ?></td>
            <td><?php echo $mostrar['Encargado'] ?></td>
            <td><?php echo $mostrar['PerfilSolicitado'] ?></td>
            <td><?php echo $mostrar['Descripcion'] ?></td> 
            </tr>
          </tr>
        <?php 
        }
         ?>
              </tbody>
            </table>
          </div>
        </div>
        <a href='Solicitud.php?alumno=<?php echo $user ?>' class="btn btn-primary " id="eliminar">Llenar formato de solicitud</a>
      </div>

    </div>
      </div>
    </div>
  
    
</section>

  <!--==========================
  Services Section
  ============================-->
  <section id="solicitud">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Formatos </h3>
          <div class="section-title-divider"></div>
          <p class="section-description">En esta sección podrás encontrar todos los formatos que necesitas en tu servicio social. </p>
        </div>
      </div>

      <div class="row">
      <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-desktop"></i></div>
          <h4 class="service-title"><a href="PDF/hola.PDF"  download="formato1.pdf">Formato de solicitud</a></h4>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
          <h4 class="service-title"><a href="PDF/hola.PDF"  download="formato1.pdf">Reporte mensual del servicio</a></h4>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
          <h4 class="service-title"><a href="PDF/hola.PDF"  download="formato1.pdf">Formato de aceptación</a></h4>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-photo"></i></div>
          <h4 class="service-title"><a href="PDF/hola.PDF"  download="formato1.pdf">Formato de actividades</a></h4>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-road"></i></div>
          <h4 class="service-title"><a href="PDF/hola.PDF"  download="formato1.pdf">Total de reportes</a></h4>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-shopping-bag"></i></div>
          <h4 class="service-title"><a href="PDF/hola.PDF"  download="formato1.pdf">Otros</a></h4>
          <p class="service-description">Et harum quidem rerum facilis est et</p>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Subscrbe Section
  ============================-->

    <!--==========================
  Services Section
  ============================-->
  <section id="Horas">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Horas y Reportes </h3>
          <div class="section-title-divider"></div>
          <p class="section-description">En esta sección podrás ver el total de horas cumplidas </p>
        </div>
      </div>
 

    <div class="row">
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
          <h4 class="service-title"><a href="PDF/hola.PDF"  download="formato1.pdf">Horas Acumuladaas</a></h4>
          <h1 class="service-title"><?php echo $row['TotalHoras'] ?></h1>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
          <h4 class="service-title"><a href="PDF/hola.PDF"  download="formato1.pdf">Horas Faltantes</a></h4>
          <h1 class="service-title"><?php echo 480-$row['TotalHoras'] ?></h1>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
          <h4 class="service-title"><a href="PDF/hola.PDF"  download="formato1.pdf">Reportes Totales</a></h4>
          <h1 class=""><?php echo $row['TotalReportes'] ?></h1>
        </div>


      </div>
     </div>
  </section>


  <!--==========================
  Subscrbe Section
  ============================-->
 

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
      $sql="SELECT * from formulario where Matricula= '$user'";
      $result=mysqli_query($conexion,$sql);
      $count = mysqli_num_rows($result);

      if ($count>0) {

   ?>

  <script>
                document.getElementById("ConsultarSS").classList.add('hidden');
                document.getElementById("btnempresa").classList.add('hidden');
  </script>

    <?php 
      }
     ?>


</body>

</html>

