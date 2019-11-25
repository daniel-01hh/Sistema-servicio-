<?php 
	$conexion=mysqli_connect('85.10.205.173:3306','jorgeasantiago','lucho1234','serviciosocial01');
 ?>
<!DOCTYPE html>
<html lang="es">
<?php
     /*function runMyFunction() {
       $message = "Reporte editado correctamente";
       echo "<script type='text/javascript'>alert('$message');</script>";
     }

     if (isset($_GET['editareporte'])) {
          runMyFunction();
     }    */

     /*function eliminarAlumno() {
       $message = "Reporte eliminado correctamente";
       echo "<script type='text/javascript'>alert('$message');</script>";
     }

     if (isset($_GET['eliminarreporte'])) {
          eliminarAlumno();
     }    */
?>
<head>
  <meta charset="utf-8">
  <title>Alumno </title>
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
</head>

<body>
  <div id="preloader"></div>
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
      	 <h1>Alumno</h1>
         <div class="actions">
            <a href="#RegistroReportes" class="btn-services">Genera tus reportes</a>
            <a href="#VerReportes" class="btn-services">Ver reportes</a>
            <div class="actions">
            </div>
         </div>
      </div>
    </div>
  </section>
  <section id="RegistroReportes">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Reportes</h3>
          <div class="section-title-divider"></div>
            <form action="altareporte.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputnreporte">Numero de reporte</label>
                    <input type="text" class="form-control" id="numreporte" name="numreporte" placeholder="# Reporte">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputmes">Mes</label>
                  <input type="text" class="form-control" id="mes" name="mes" placeholder="Mes">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputhoras">Horas reportadas</label>
                  <input type="text" class="form-control" id="horasreportadas" name="horasreportadas" placeholder="Horas reportadas">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputperiodo">Periodo</label>
                  <input type="text" class="form-control" id="periodo" name="periodo" placeholder="Periodo">
                </div>
               </div>
                <div class="form-group col-md-6">
                    <label for="inputactividades">Actividades</label>
                    <input type="text" class="form-control" id="actividades" name="actividades" placeholder="Actividades">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputobservaciones">Observaciones</label>
                    <input type="text" class="form-control" id="observaciones" name="observaciones" placeholder="Observaciones">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputmatricula">Matricula</label>
                    <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Matricula">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>    
        </div>
      </div>
    </div>
  </section>
  <section id="VerReportes">
    <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Consultar Reportes </h3>
            <div class="section-title-divider"></div>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                    <td># Reporte</td>
                                    <td>Mes</td>
                                    <td>Horas reportadas</td>
                                    <td>Periodo</td>
                                    <td>Actividades</td>
                                    <td>Observaciones</td>
                                    <td>Matrícula</td>
                                    <td>Editar</td>
                                    <td>Eliminar</td>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $sql="SELECT NumReporte, Mes, HorasReportadas, Periodo, Actividades, Observaciones, Matricula from reporte";
                                        $result=mysqli_query($conexion,$sql);

                                        while($mostrar=mysqli_fetch_array($result)){
                                    ?>

                                    <tr>
                                        <?php 
                                            $mat = $mostrar['NumReporte'];
                                        ?>
                                        <td id="numreporte"><?php echo $mostrar['NumReporte'] ?></td>
                                        <td><?php echo $mostrar['Mes'] ?></td>
                                        <td><?php echo $mostrar['HorasReportadas'] ?></td>
                                        <td><?php echo $mostrar['Periodo'] ?></td>
                                        <td><?php echo $mostrar['Actividades'] ?></td>
                                        <td><?php echo $mostrar['Observaciones'] ?></td>
                                        <td><?php echo $mostrar['Matricula'] ?></td>
                                        <td><a href='cambiarreporte.php?nreporte=<?php echo $mat ?>' class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" id="editar"></a></td>
                                        <td><a href='eliminarreporte.php'.php?nreporte=<?php echo $mat ?>' class="btn btn-primary glyphicon glyphicon-trash " id="eliminar"></a></td>  
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