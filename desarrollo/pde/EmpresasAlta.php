<?php
	include 'php/conexion.php';

	$InsertarEmpresa = "";

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


	$query = "INSERT INTO empresas(nombre, descripcion, mision, vision, productos, direccion, comoLlegar, contacto, telefono1, telefono2, correo, sitioWeb, antiguedad, numeroEmpleados, vacantes, vacantesDetalle, logotipo, status, Usuarios_idUsuario) values ('".$nombreEmpresa."', '".$descripcion."', '".$mision."', '".$vision."', '".$productos."',  '".$direccionEmpresa."', 'Vuelta a la izquierda', '".$contacto."', '".$telefono1."', '".$telefono2."', '".$correoEmpresa."', '".$webEmpresa."', '".$antiguedad."', '".$numEmpleados."', '".$vacantes."', '2 para bla bla', '".$logotipo."', '".$status."', '".$usuario."')";
		
	
	//$query = "INSERT INTO apoyos(proveedor, objetivo, convocatoria, status, Departamentos_idDepartamento, Usuarios_idUsuario) values('kfjsdkflf', 'lskdl', 'skldlsa', 1, 1, 1)";
	mysql_query($query);
	
	echo $query;

	//mysql_query($inserta);
	
	
?>
