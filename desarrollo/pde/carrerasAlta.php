<?php

include 'php/conexion.php';

$nom = $_POST['nombre_aux'];
$nombre = $_POST['nom'];
$objetivo = $_POST['o'];
$ingreso = $_POST['ing'];
$egreso = $_POST['eg'];
$campo = $_POST['cam'];
$alumnos = $_POST['alu'];

 $consulta = "SELECT * FROM universidades";
 $resultado = mysql_query($consulta);
  while($registro = mysql_fetch_array($resultado)){
  	if($registro['nombre'] == $nom){
  		$encontrado = $registro['idUniversidad'];
 

  	}
  }

 


$inserta = "INSERT INTO carreras (nombre, objetivo, perfilIngreso, perfilEgreso, campo, alumnosDisponibles, Universidades_idUniversidad) values('".$nombre."','". $objetivo."', '".$ingreso."', '".$egreso."', '".$campo."', '".$alumnos."', '".$encontrado."')";

mysql_query($inserta);



 mysql_close($link);
?>