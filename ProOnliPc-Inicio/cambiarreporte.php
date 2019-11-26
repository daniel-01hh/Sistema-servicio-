<?php 
    $conexion=mysqli_connect('85.10.205.173:3306','jorgeasantiago','lucho1234','serviciosocial01');
    $nreporte = $_GET['nreporte'];
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
	  	x = params.get("nreporte");

		if (x != null) {
          document.getElementById("nreporte").value = x;
          location.href="http://localhost/ProOnliPc-inicio/cambiarreporte?nreporte=" + x; 
		}
  </script>

</head>

<body>
  <div id="preloader"></div>
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
      	 <h1>Alumno</h1>
         <div class="actions">
            <a href="#EdicionReportes" class="btn-services">Editar información del reporte</a>
            <div class="actions">
            </div>
         </div>
      </div>
    </div>
  </section>

  <section id="EdicionReportes">

    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Reportes del Servicio social</h3>
          <div class="section-title-divider"></div>
            <form action="editarreporte.php" method="post">
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
          $sql="SELECT NumReporte, Mes, HorasReportadas, Periodo, Actividades, Observaciones, Matricula from reporte where 	NumReporte= '$nreporte'";
          $result=mysqli_query($conexion,$sql);
          while($mostrar=mysqli_fetch_array($result)){
          ?>
            <script>
                document.getElementById("numreporte").value = "<?php echo $mostrar['NumReporte'] ?>";
                document.getElementById("mes").value = "<?php echo $mostrar['Mes'] ?>";
                document.getElementById("horasreportadas").value = "<?php echo $mostrar['HorasReportadas'] ?>";
                document.getElementById("periodo").value = "<?php echo $mostrar['Periodo'] ?>";
                document.getElementById("actividades").value = "<?php echo $mostrar['Actividades'] ?>";
                document.getElementById("observaciones").value = "<?php echo $mostrar['Observaciones'] ?>";
                document.getElementById("matricula").value = "<?php echo $mostrar['Matricula'] ?>";
            </script>
          <?php
            }
           ?>
</body>
</html>