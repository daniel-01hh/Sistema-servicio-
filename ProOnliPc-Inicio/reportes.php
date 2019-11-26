<?php 
	$conexion=mysqli_connect('85.10.205.173:3306','jorgeasantiago','lucho1234','serviciosocial01');
  $user = $_GET['alumno'];
  $sql="SELECT * from alumno where Matricula= '$user'";
  $result=mysqli_query($conexion,$sql);
  $row = $result->fetch_array(MYSQLI_ASSOC);
  
  $reporte = $row['TotalReportes'];
  $horast =  $row['TotalHoras'];
 ?>
<!DOCTYPE html>
<html lang="es">
<?php
     function runMyFunction() {
       $message = "Reporte eliminado correctamente";
       echo "<script type='text/javascript'>alert('$message');</script>";
     }

     if (isset($_GET['eliminado'])) {
          runMyFunction();
     }    

     function editarAlumno() {
       $message = "Reporte editado correctamente";
       echo "<script type='text/javascript'>alert('$message');</script>";
     }

     if (isset($_GET['editado'])) {
          editarAlumno();
     }    
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
            <form action="reportepdf.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputnreporte">Numero de reporte</label>
                    <input type="number" class="form-control" id="numreporte" name="numreporte" placeholder="# Reporte" required value="<?php echo $reporte+1 ?>" disabled>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputmes">Mes</label>
                          <select name="mes" class="form-control" id="mes" required>
                           <option value="Agosto">Agosto</option>
                           <option value="Septiembre">Septiembre</option>
                           <option value="Octubre">Octubre</option>
                           <option value="Noviembre">Noviembre</option>
                           <option value="Diciembre">Diciembre</option>
                           <option value="Enero">Enero</option>
                         </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputhoras">Horas reportadas</label>
                  <input type="number" class="form-control" id="horasreportadas" name="horasreportadas" placeholder="Horas reportadas" max="80">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputhoras">Horas Acumuladas hasta el momento</label>
                  <input type="number" class="form-control" id="horasreportadas" name="horast" max="480" value="<?php echo $horast ?>" disabled>
                </div>


                 <h3 class="section-title">Reporte Actividades</h3>
            <div class="section-title-divider"></div>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                   
                                    <td>Periodo</td>
                                    <td>Actividades</td>
                                    <td>Observaciones</td>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" name="p1" id="p1" placeholder="1 de octubre a 31 de octubre"></td>
                                        <td><input type="text" name="a1" id="a1" placeholder="Comunique a cada estudiante sobre la segunda tutoria"></td>
                                        <td><input type="text" name="o1" id="o1" placeholder="Observaciones del encargado directo de servicio social"></td>
                                    </tr>

                                    <tr>
                                        <td><input type="text" name="p2"></td>
                                        <td><input type="text" name="a2"></td>
                                        <td><input type="text" name="o2"></td>
                                    </tr>


                                    <tr>
                                        <td><input type="text" name="p3"></td>
                                        <td><input type="text" name="a3"></td>
                                        <td><input type="text" name="o3"></td>
                                    </tr>


                                    <tr>
                                        <td><input type="text" name="p4"></td>
                                        <td><input type="text" name="a4"></td>
                                        <td><input type="text" name="o4"></td>
                                    </tr>

                                     <tr>
                                        <td><input type="text" name="p5"></td>
                                        <td><input type="text" name="a5"></td>
                                        <td><input type="text" name="o5"></td>
                                    </tr>

                                    <tr>
                                        <td><input type="text" name="p6"></td>
                                        <td><input type="text" name="a6"></td>
                                        <td><input type="text" name="o6"></td>
                                    </tr>


                              </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
              </div>
               <input type="hidden" class="form-control" id="horasreportadas" name="alumno" max="480" value="<?php echo $user ?>">

              <button type="submit" name="" id="" class="btn btn-primary "><lefth>Generar PDF</lefth></button>
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
                                        $sql="SELECT * from reporte where Matricula = '$user'";
                                      $result=mysqli_query($conexion,$sql);

                                    while($mostrar=mysqli_fetch_array($result)){
                                    ?>

                                    <tr>
                                        <?php 
                                            $mat = $mostrar['NumReporte'];
                                            $act = $mostrar['Actividades'];
                                            $per = $mostrar['Periodo'];
                                            $obs = $mostrar['Observaciones'];
                                            $porcionesA = explode("\n", $act);
                                            $porcionesP = explode("\n", $per);
                                            $porcionesO = explode("\n", $obs);
                                        ?>
                                        <td id="numreporte"><?php echo $mostrar['NumReporte'] ?></td>
                                        <td><?php echo $mostrar['Mes'] ?></td>
                                        <td><?php echo $mostrar['HorasReportadas'] ?></td>
                                        <td><?php echo $porcionesP[0] . "<br>" . $porcionesP[1]  . "<br>" . $porcionesP[2]  . "<br>" . $porcionesP[3]  . "<br>" . $porcionesP[4] . "<br>" . $porcionesP[5]?></td>


                                        <td><?php echo $porcionesA[0] . "<br>" . $porcionesA[1]  . "<br>" . $porcionesA[2]  . "<br>" . $porcionesA[3]  . "<br>" . $porcionesA[4] . "<br>" . $porcionesA[5]?></td>

                                        <td><?php echo $porcionesO[0] . "<br>" . $porcionesO[1]  . "<br>" . $porcionesO[2]  . "<br>" . $porcionesO[3]  . "<br>" .  $porcionesO[4] . "<br>" . $porcionesO[5]?></td>

                                        <td><?php echo $mostrar['Matricula'] ?></td>
                                        <td><a href='cambiarreporte.php?nreporte=<?php echo $mat ?>' class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" id="editar"></a></td>
                                        <td><a href='eliminarreporte.php?nreporte=<?php echo $mat ?>&alumno=<?php echo $user ?>' class="btn btn-primary glyphicon glyphicon-trash " id="eliminar"></a></td>  
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

  <style type="text/css">
    input {display: block; padding: 0; margin: 0; border: 0; width: 100%;}
    td {margin: 0; padding: 0;}
  </style>

</body>
</html>