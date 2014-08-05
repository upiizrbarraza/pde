<?php
include 'php/conexion.php';
$contador = 0;
$nombre = $_POST['nom'];

$consulta = "SELECT * FROM universidades";
 $resultado = mysql_query($consulta);
  while($registro = mysql_fetch_array($resultado)){
  	if($registro['nombre'] == $nombre){
  		
  		$contador = 1;

  	}
  }

  if($contador == 0){
  	$inserta = "INSERT INTO universidades (nombre) values('".$nombre."')";

     mysql_query($inserta);
  }
  









 
?>