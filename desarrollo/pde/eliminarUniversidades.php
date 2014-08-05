<?php
include 'php/conexion.php';

$nombre = $_POST['nom'];
$direccion = $_POST['dir'];

$correo = $_POST['cor'];


$selec = "SELECT * FROM universidades WHERE nombre = '".$nombre."'";
$respuesta_uni = mysql_query($selec);

while($registro = mysql_fetch_array($respuesta_uni)){
  	$r= $registro['idUniversidad'];
  	
 }

$borrar = "DELETE FROM carreras WHERE Universidades_idUniversidad = '".$r."'";
mysql_query($borrar);

$inserta ="DELETE FROM universidades WHERE nombre = '$nombre' AND direccion = '$direccion' AND correo = '$correo'";
 
mysql_query($inserta);



 
?>