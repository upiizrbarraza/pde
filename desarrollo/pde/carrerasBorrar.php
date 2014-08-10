<?php
include 'php/conexion.php';

$id = $_POST['id'];
 
$borrar = "DELETE FROM carreras WHERE idCarrera = '".$id."'";

 
mysql_query($borrar);



 
?>