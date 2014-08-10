<?php

include 'php/conexion.php';
$id = $_POST['ide'];
$numero = $_POST['num'];
$nombre = $_POST['nom'];
$objetivo = $_POST['o'];
$ingreso = $_POST['ing'];
$egreso = $_POST['eg'];
$campo = $_POST['cam'];
$alumnos = $_POST['alu'];


  
//$inserta_aux = "INSERT INTO carreras (nombre, objetivo, perfilIngreso, perfilEgreso, campo, alumnosDisponibles, Universidades_idUniversidad) values('".$nombre."','". $objetivo."', '".$ingreso."', '".$egreso."', '".$campo."', '".$alumnos."', '".$numero."')";
$inserta = "UPDATE carreras SET nombre = '$nombre', objetivo = '$objetivo', perfilIngreso = '$ingreso', perfilEgreso = '$egreso', campo = '$campo', alumnosDisponibles = '$alumnos'  WHERE idCarrera = '$id'";

mysql_query($inserta);


?>