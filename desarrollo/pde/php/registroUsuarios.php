<?php
	$u = $_GET['user'];
	$email = $_GET['mail'];
	$password = $_GET['pass'];

	include 'conexion.php';

	$pwd = md5($password);

	$query="INSERT INTO usuarios(contrasena, correo, nombre, tipoUsuario, Departamentos_idDepartamento) values('".$pwd."', '".$email."', '".$u."',1,0)";
	$mquery = mysql_query($query);
	header('location: ../PED_DIAG_Login.php');
?>