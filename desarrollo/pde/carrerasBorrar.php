<?php
include 'php/conexion.php';

$nombre = $_POST['nom'];
 
$borrar = "DELETE FROM carreras WHERE nombre = '".$nombre."'";

 
mysql_query($borrar);



 
?>