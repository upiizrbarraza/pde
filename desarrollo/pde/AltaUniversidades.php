<?php
include 'php/conexion.php';

$nombre = $_POST['nom'];
$direccion = $_POST['dir'];
$tel1 = $_POST['telefono1'];
$tel2 = $_POST['telefono2'];
$tel3 = $_POST['telefono3'];
$correo = $_POST['cor'];
$contacto = $_POST['cont'];
$vision = $_POST['vis'];
$mision = $_POST['mis'];
$sitio = $_POST['si'];
$logo = $_POST['lo'];


$inserta = "UPDATE universidades SET nombre = '$nombre', direccion = '$direccion', telefono1 = '$tel1', telefono2 = '$tel2', correo = '$correo', contacto= '$contacto', vision= '$vision', mision='$mision', Usuarios_idUsuario= '0', status ='1', sitioWeb= '$sitio', logotipo = '$logo'  WHERE nombre = '$nombre'";

echo $inserta;
 

mysql_query($inserta);
echo $inserta;


 
?>