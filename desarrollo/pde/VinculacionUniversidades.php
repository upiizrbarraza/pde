<?php

$id = $_POST['ide'];
$encabezado =" ";
$descripcion = $_POST["des"];
$apoyo = $_POST["apo"];
$opcion = $_POST["op"];

$de = "luis_bernys@hotmail.com";
$asunto = "Vinculacion- Portal de Desarrollo Empresarial";

             include 'php/conexion.php';

             $consulta_apoyo = "SELECT * FROM apoyos WHERE nombre = '".$apoyo."'";
             $respuesta_apoyo = mysql_query($consulta_apoyo);
             while($registro_apoyo=mysql_fetch_array($respuesta_apoyo)){
              $idApo = $registro_apoyo['idApoyo'];
             }
             
             $insertar_registro = "INSERT INTO vinculacion(Universidades_idUniversidades, Empresas_idEmpresas, Apoyos_idApoyos, Usuarios_idUsuario, necesidad, propuesta) values('$id', '1', '$idApo', '0', '$descripcion', '$opcion')";
             mysql_query($insertar_registro);
             
              $consulta ="SELECT * FROM universidades WHERE idUniversidad ='".$id."'"; 
              $respuesta =mysql_query($consulta); 

              while ($registro=mysql_fetch_array($respuesta)){
               $para = $registro['correo'];
               $nombre = $registro['nombre'];
              }
              




//$headers .= "From: Portal de Desarrollo Empresarial \r\n";


$mensaje = "Buen dia, la institucion $nombre a recibido una nueva propuesta de vinculacion correspondiente a la opción de $opcion y este es su mensaje: \n ";
$mensaje .= "$descripcion. \n Le recomendamos responder dicha solicitud lo mas rapido posible, gracias.";

if(mail($para, $asunto, $mensaje)){
	echo "Mensaje Enviado ";
}
?>