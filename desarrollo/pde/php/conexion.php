<?php
/*
$host = 'pde.itdevel.com.mx';
$usuario = 'itdevelc_upiiz'; 
$pass = 'admin123.';

$link=mysql_connect($host, $usuario, $pass)or die("¡Imposible conectar!"); 
mysql_select_db("itdevelc_pdeb", $link)or die("Ups!, no se encuentra la BD");  
*/
$host = 'localhost';
$usuario = 'root'; 
$pass = '';

$link=mysql_connect($host, $usuario, $pass)or die("¡Imposible conectar!"); 
mysql_select_db("itdevelc_pdeb", $link)or die("Ups!, no se encuentra la BD");

?>
