<?php
	include 'php/conexion.php';

	
	
	$nombre = $_POST['nom'];
	$comoLlegar = $_POST['c'];
	$direccion = $_POST['dir'];
	$telef1 = $_POST['t1'];
	$telef2 = $_POST['t2'];
	$contacto = $_POST['cont'];
	$correo = $_POST['cor'];
	$sitio = $_POST['si']; 
	$mision = $_POST['mis'];
	$vision = $_POST['vis'];
	$logotipo = $_POST['lo'];
	$boton = $_POST['radio'];
    $c=0;
             $consulta_n = "SELECT * FROM universidades";
             $resultado_n = mysql_query($consulta_n);
             while($registro_n = mysql_fetch_array($resultado_n)){
                     if($registro_n['nombre'] == $nombre){
      
                          $c = 1;
                          

                      }
              }

  if($c == 0){

    $inserta_n = "INSERT INTO universidades (nombre, mision, vision, direccion, comoLlegar, contacto, telefono1, telefono2, correo, sitioWeb, logotipo, status, servicioMyV, Usuarios_idUsuario) values('$nombre', '$mision', '$vision', '$direccion', '$comoLlegar', '$contacto', '$telef1', '$telef2', '$correo', '$sitio', '$logotipo', '1', '$boton', '0')";
     mysql_query($inserta_n);
  }
  else{
             
	$actualiza = "UPDATE universidades SET nombre = '$nombre', mision = '$mision', servicioMyV = '$boton', vision = '$vision', direccion = '$direccion', comoLlegar='$comoLlegar', contacto = '$contacto', telefono1 = '$telef1', telefono2 = '$telef2', correo = '$correo', sitioWeb = '$sitio', logotipo = '$logotipo', Usuarios_idUsuario = '0', status = '1' WHERE nombre = '$nombre'";
	mysql_query($actualiza);
	
  }

	
	
	
	
?>