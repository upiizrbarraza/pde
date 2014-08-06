<?php
      session_start();

      if(isset($_SESSION['userauth'])){
        header('location: ../PED_DIAG_EmpresasAlta.php');
      }else{

      include 'conexion.php';

      $username = $_GET['user'];
      $passwd = md5($_GET['pass']);

      $query = mysql_query("SELECT idUsuario, nombre, contrasena FROM usuarios WHERE nombre= '$username';");

      $row = mysql_num_rows($query);
      $data=mysql_fetch_array($query);
      if ($row == 1){
      $_SESSION['userauth'] = $data['nombre'];
      header('location: ../PED_DIAG_EmpresasAlta.php');
      }else{
      header('location: ../PED_DIAG_Login.php');
      }

      }
?>