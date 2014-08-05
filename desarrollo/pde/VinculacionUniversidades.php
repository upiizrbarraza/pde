<?php

$id = $_POST['ide'];
$encabezado =" ";
$descripcion = $_POST["des"];

$opcion = $_POST["op"];
$de = "luis_bernys@hotmail.com";
$asunto = "Vinculacion- Portal de Desarrollo Empresarial";

             include 'php/conexion.php';
  
             
              $consulta ="SELECT * FROM universidades WHERE idUniversidad ='".$id."'"; 
              $respuesta =mysql_query($consulta); 

              while ($registro=mysql_fetch_array($respuesta)){
               $para = $registro['correo'];
               $nombre = $registro['nombre'];
              }
              




$headers .= "From: Portal de Desarrollo Empresarial \r\n";


$mensaje = "Buen dia, la institucion $nombre a recibido una nueva propuesta de vinculacion correspondiente a la opción de $opcion y este es su mensaje: \n ";
$mensaje .= "$descripcion. \n Le recomendamos responder dicha solicitud lo mas rapido posible, gracias.";

if(mail($para, $asunto, $mensaje)){
	echo "Mensaje Enviado ";
}
?>