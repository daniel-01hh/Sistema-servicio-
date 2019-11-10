<?php 

	$conexion=mysqli_connect('85.10.205.173:3306','jorgeasantiago','lucho1234','serviciosocial01');

 ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Administrador </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

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

        <h1>Administrador</h1>
        <div class="actions">
          <a href="#RegistroAlumnos" class="btn-services">Registrar Alumnos</a>
          <a href="#RegistroSS" class="btn-get-started">Registrar Servicio Social</a>
          <a href="#ConsultarAlum" class="btn-get-started">Consultar Alumnos</a>
          <a href="#ConsultarSS" class="btn-get-started">Consultar Servicio Social</a>
          <a href="#Salir" class="btn-get-started">Salir</a>
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
          <h3 class="section-title">Registro Alumnos</h3>
          <div class="section-title-divider"></div>
          <form>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputAddress2">Matricula</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Matricula">
  </div>
     <div class="form-group col-md-6">
      <label for="inputnombre4">Nombre</label>
      <input type="text" class="form-control" id="inputnombre4" placeholder="Nombre">
    </div>
    <div class="form-group col-md-6">
      <label for="inputAPaterno">Apellido Paterno</label>
      <input type="text" class="form-control" id="inputAPaterno" placeholder="Apellido Paterno">
    </div>
    
    <div class="form-group col-md-6">
      <label for="inputAMaterno">Apellido Materno</label>
      <input type="text" class="form-control" id="inputAMaterno" placeholder="Apellido Materno">
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputCorreo">Correo Electronico</label>
    <input type="text" class="form-control" id="inputCorreo" placeholder="Correo Electronico">
  </div>
  <div class="form-group col-md-6">
    <label for="inputTelefono">Telefono</label>
    <input type="text" class="form-control" id="inputTelefono" placeholder="Telefono">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputSemestre">Semestre</label>
      <input type="text" class="form-control" id="inputSemestre" placeholder="Semestre">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPromedio">Promedio aproximado</label>
      <input type="text" class="form-control" id="inputPromedio" placeholder="Promedio Aproximado">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPromedio">Creditos cursados</label>
      <input type="text" class="form-control" id="inputPromedio" placeholder="Creditos cursados">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPromedio">Habilidades e Intereses</label>
      <input type="text" class="form-control" id="inputPromedio" placeholder="Habilidades e Intereses">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>    
        </div>
      </div>
    </div>
   

   
  </section>

  <!--==========================
  Services Section
  ============================-->
  <section id="RegistroSS">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Registros de Servicios Sociales </h3>
          <div class="section-title-divider"></div>
            <form>
  <div class="form-row">
    <div class="form-group col-md-6">
     <div class="form-group">
    <label for="inputServicio">Nombre del Servicio</label>
    <input type="text" class="form-control" id="inputServicio" placeholder="Nombre del Servicio">
  </div>
      <label for="inputUbicacion">Ubicación</label>
      <input type="text" class="form-control" id="inputUbicacion" placeholder="Ubicación">
    </div>   
    <div class="form-group col-md-6">
      <label for="inputDescripcion">Descripción</label>
      <input type="text" class="form-control" id="inputDescripcion" placeholder="Descripción">
    </div>  
    <div class="form-group col-md-6">
      <label for="inputEncargado">Encargado</label>
      <input type="text" class="form-control" id="inputEncargado" placeholder="Encargado">
    </div>
  </div>
    <div class="form-group col-md-6">
      <label for="inputDescripcion">Descripción</label>
      <input type="text" class="form-control" id="inputDescripcion" placeholder="Descripción">
    </div>  
    <div class="form-group col-md-6">
      <label for="inputEncargado">Encargado</label>
      <input type="text" class="form-control" id="inputEncargado" placeholder="Encargado">
    </div>
  <button type="submit" class="btn btn-primary "><lefth>Guardar</lefth></button>
</form>  
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Subscrbe Section
  ============================-->
<section id="ConsultarAlum">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Consultar Alumnos </h3>
          <div class="section-title-divider"></div>
          <div class="card mb-3">
          <div class="card-header">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <td>Matricula</td>
				    <td>Nombre(s)</td>
				    <td>Apellidos</td>
				    <td>Correo</td>
				    <td>Telefono</td>
				    <td>NumFormulario</td>
				    <td>NumSolicitante</td>
				    <td>TotalReportes</td>
				    <td>TotalHoras</td>
				    <td>Editar</td>
				    <td>Eliminar</td>
                  </tr>
                </thead>
                <tbody>
                  <?php 
						$sql="SELECT * from solicitante";
						$result=mysqli_query($conexion,$sql);

						while($mostrar=mysqli_fetch_array($result)){
						 ?>

						<tr>
							<td><?php echo $mostrar['Matricula'] ?></td>
							<td><?php echo $mostrar['Nombre'] ?></td>
							<td><?php echo $mostrar['Apellido'] ?></td>
							<td><?php echo $mostrar['Correo'] ?></td>
							<td><?php echo $mostrar['Telefono'] ?></td>
							<td><?php echo $mostrar['NumFormulario'] ?></td>
							<td><?php echo $mostrar['NumeSolicitante'] ?></td>
              <td><?php echo $mostrar['TotalReportes'] ?></td>
              <td><?php echo $mostrar['TotalHoras'] ?></td>
              <td><button type="submit" class="btn btn-primary ">Editar</button></td>
                    <!--<td><a href="#">Eliminar</a></td>-->
                    <td><button type="submit" class="btn btn-primary ">Eliminar</button></td>
						</tr>
               <?php 
					}
					 ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
           
        </div>
      </div>

      
   
  </section>
    <!--==========================
  Services Section
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
							<td><?php echo $mostrar['NumSolicitante'] ?></td>
							<td><?php echo $mostrar['NombreSolicitante'] ?></td>
							<td><?php echo $mostrar['Direccion'] ?></td>
							<td><?php echo $mostrar['Encargado'] ?></td>
							<td><?php echo $mostrar['PerfilSolicitado'] ?></td>
              <td><?php echo $mostrar['Descripcion'] ?></td>
              <td><button type="submit" class="btn btn-primary ">Editar</button></td>
                    <!--<td><a href="#">Eliminar</a></td>-->
                    <td><button type="submit" class="btn btn-primary ">Eliminar</button></td>
						</tr>
						</tr>
					<?php 
					}
					 ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

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
