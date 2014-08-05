<?php
	include 'php/conexion.php';

	$InsertarEmpresa = "";
	$id = $_POST['Id'];
	$nombreEmpresa = $_POST['Nombre'];
	$direccionEmpresa = $_POST['Direccion'];
	$telefono1 = $_POST['Telefono1'];
	$telefono2 = $_POST['Telefono2'];
	$contacto = $_POST['Contacto'];
	$correoEmpresa = $_POST['Correo'];
	$webEmpresa = $_POST['Web'];
	$numEmpleados = $_POST['Empleados'];
	$antiguedad = $_POST['Ant'];
	$vacantes = $_POST['Vacantes'];
	$descripcion = $_POST['Descripcion']; 
	$mision = $_POST['Mision'];
	$vision = $_POST['Vision'];
	$productos = $_POST['Productos'];
	$logotipo = $_POST['Logo'];
	$usuario = 1;
	$status = 1;


	$actualiza = "UPDATE empresas SET nombre = '$nombreEmpresa', descripcion = '$descripcion', mision = '$mision', vision = '$vision', productos = '$productos', direccion = '$direccionEmpresa', contacto = '$contacto', telefono1 = '$telefono1', telefono2 = '$telefono2', correo = '$correoEmpresa', sitioWeb = '$webEmpresa', antiguedad = '$antiguedad', numeroEmpleados = '$numEmpleados', vacantesDetalle = 'vacantes', logotipo = '$logotipo' WHERE IdEmpresa = '$id'";
		

	$resultado=mysql_query($actualiza);
	
	echo $actualiza;
	echo $resultado;

	//mysql_query($inserta);
	
	
?>