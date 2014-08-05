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

	


	$actualiza = "UPDATE universidades SET nombre = '$nombre', mision = '$mision', servicioMyV = '$boton', vision = '$vision', direccion = '$direccion', comoLlegar='$comoLlegar', contacto = '$contacto', telefono1 = '$telef1', telefono2 = '$telef2', correo = '$correo', sitioWeb = '$sitio', logotipo = '$logotipo', Usuarios_idUsuario = '0', status = '1' WHERE nombre = '$nombre'";
	
echo $actualiza;
	mysql_query($actualiza);

	
	
	
	
?>