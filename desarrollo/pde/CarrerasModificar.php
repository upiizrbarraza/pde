<?php

include 'php/conexion.php';

$nombre = $_POST['nom'];
$objetivo = $_POST['o'];
$ingreso = $_POST['ing'];
$egreso = $_POST['eg'];
$campo = $_POST['cam'];
$alumnos = $_POST['alu'];

 $consulta = "SELECT * FROM carreras";
 $resultado = mysql_query($consulta);
  while($registro = mysql_fetch_array($resultado)){
  	if($registro['nombre'] == $nombre){
  		$encontrado = $registro['idCarrera'];
  	}
  }

$inserta = "UPDATE carreras SET objetivo = '$objetivo', perfilIngreso = '$ingreso', perfilEgreso = '$egreso', campo = '$campo', alumnosDisponibles = '$alumnos'  WHERE nombre = '$nombre'";

mysql_query($inserta);



 mysql_close($link);
?>