<?php
    $host = "85.10.205.173:3306";
    $user_db = "jorgeasantiago";
    $pass_db = "lucho1234";
    $db_name = "serviciosocial01";
    $tbl_name = "alumno";

    $conexion = new mysqli($host, $user_db, $pass_db, $db_name);
    
    if ($conexion->connect_error) {
        die("La conexion falló: " . $conexion->connect_error);
        exit;
    }

//
$salida ="";
$query="SELECT * FROM alumnos ORDER BY Matricula";
if(isset($_POST['alumno']))
{
	$q=$conexion->real_escape_string($_POST['alumno']);
	$query="SELECT * FROM alumno WHERE 
		Matricula LIKE '%".$q."%' OR
		Nombre LIKE '%".$q."%' OR
		Apellido LIKE '%".$q."%' OR
		Correo LIKE '%".$q."%' OR
        Telefono LIKE '%".$q."%' OR
		Contrasena LIKE '%".$q."%' OR
		Usuario LIKE '%".$q."%' OR
        NumFormulario LIKE '%".$q."%' OR
		NumSolicitante LIKE '%".$q."%' OR
		TotalReportes LIKE '%".$q."%' OR
		TotalHoras LIKE '%".$q."%'";
}

 $resultado = $mysqli->query($query);
if($resultado->num_rows->0){
    $salida.="<table class='tabla_datos'>
    <thead>
                  <tr>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Contrasena</th>
                    <th>Usuario</th>
                    <th>NumFormulario</th>
                    <th>NumSolicitante</th>
                    <th>Total de Reportes </th>
                    <th>Total de Horas </th>
                  </tr>
                </thead>
                <tbody>";
    while($fila = $resultado->fetch_assoc()){
        $salida.="
   
                  <tr>
                    <td>".$fila['Matricula']."</td>
                    <td>".$fila['Nombre']."</td>
                    <td>".$fila['Apellido']."</td>
                    <td>".$fila['Correo']."</td>
                    <td>".$fila['Telefono']."</td>
                    <td>".$fila['Contrasena']."</td>
                    <td>".$fila['Usuario']."</td>
                    <td>".$fila['NumFormulario']."</td>
                    <td>".$fila['NumSolicitante']."</td>
                    <td>".$fila['TotalReportes']."</td>
                    <td>".$fila['TotalHoras']."</td>
                    
                  </tr>";
     }
    $salida.="</tbody></table>";
    
}else{
    $salida.="No hay datos de alumnos";
}

echo $salida;
$mysqli->close();

?>



