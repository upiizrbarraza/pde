<?php

include 'php/conexion.php';

$nom = $_POST['nombre_aux'];
$nombre = $_POST['nom'];
$objetivo = $_POST['o'];
$ingreso = $_POST['ing'];
$egreso = $_POST['eg'];
$campo = $_POST['cam'];
$alumnos = $_POST['alu'];



 


$inserta = "INSERT INTO carreras (nombre, objetivo, perfilIngreso, perfilEgreso, campo, alumnosDisponibles, Universidades_idUniversidad) values('".$nombre."','". $objetivo."', '".$ingreso."', '".$egreso."', '".$campo."', '".$alumnos."', '".$nom."')";

mysql_query($inserta);



 mysql_close($link);
?>