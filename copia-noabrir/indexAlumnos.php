<?php 

	$conexion=mysqli_connect('85.10.205.173:3306','jorgeasantiago','lucho1234','serviciosocial01');

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

        <h1>Bienvenidos a tus datos de servicio social</h1>
        <h2>Encontraras <span class="rotating">Total de horas, Lugares disponibles para servicio, algunas cosas mas</span></h2>
        <div class="actions">
          <a href="#Empresas" class="btn-get-started">Empresas</a>
          <a href="#solicitud" class="btn-services">Formatos</a>
          <a href="#Horas" class="btn-get-started">Total horas</a>
          <a href="#Salir" class="btn-get-started">Salir</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
 
  About Section
  ============================-->
  <section id="Empresas">

    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Empresas</h3>
          <div class="section-title-divider"></div>
          
          	<br>

					<table border="1" >
						<tr>
							<td>numeroSolicitante</td>
							<td>nombre</td>
							<td>direccion</td>
							<td>encargado</td>
							<td>perfil</td>	
							<td>descripcion</td>
						</tr>

						<?php 
						$sql="SELECT * from solicitante";
						$result=mysqli_query($conexion,$sql);

						while($mostrar=mysqli_fetch_array($result)){
						 ?>

						<tr>
							<td><?php echo $mostrar['NumSolicitante'] ?></td>
							<td><?php echo $mostrar['NombreSolicitante'] ?></td>
							<td><?php echo $mostrar['Direccion'] ?></td>
							<td><?php echo $mostrar['Encargado'] ?></td>
							<td><?php echo $mostrar['PerfilSolicitado'] ?></td>
							<td><?php echo $mostrar['Descripcion'] ?></td>
						</tr>
					<?php 
					}
					 ?>
					</table>



            <img src="img/Fac-informatica.jpg" alt="">
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
          <p class="service-description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
          <h4 class="service-title"><a href="PDF/hola.PDF"  download="formato1.pdf">Reporte mensual del servicio</a></h4>
          <p class="service-description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
          <h4 class="service-title"><a href="PDF/hola.PDF"  download="formato1.pdf">Formato de aceptación</a></h4>
          <p class="service-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-photo"></i></div>
          <h4 class="service-title"><a href="PDF/hola.PDF"  download="formato1.pdf">Formato de actividades</a></h4>
          <p class="service-description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-road"></i></div>
          <h4 class="service-title"><a href="PDF/hola.PDF"  download="formato1.pdf">Total de reportes</a></h4>
          <p class="service-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-shopping-bag"></i></div>
          <h4 class="service-title"><a href="PDF/hola.PDF"  download="formato1.pdf">Otros</a></h4>
          <p class="service-description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
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
          <h3 class="section-title">Formatos </h3>
          <div class="section-title-divider"></div>
          <p class="section-description">En esta sección podrás ver el total de horas cumplidas </p>
           <img src="img/horastotal.png" alt="">
        </div>
      </div>

      
    </div>
  </section>
  <section id="Salir">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="img/Logo.png" alt="ProOnliPc">
        </div>
        <div class="actions">
           <h1><a href="../ProOnliPc1/index.html" title="Mi enlace">Salir</a><h1>
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


</body>

</html>

