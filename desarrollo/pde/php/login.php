<?php
      session_start();

      if(isset($_SESSION['userauth'])){
        header('location: ../PED_DIAG_SDEIndex.php');
      }else{

      include 'conexion.php';

      $username = $_GET['user'];
      $passwd = md5($_GET['pass']);

      $query = mysql_query("SELECT idUsuario, nombre, contrasena FROM usuarios WHERE nombre= '$username';");

      $row = mysql_num_rows($query);
      $data=mysql_fetch_array($query);
      if ($row == 1){
      $_SESSION['userauth'] = $data['nombre'];
      $_SESSION['iduser'] = $dara['idUsuario'];
      header('location: ../PED_DIAG_SDEIndex.php');
      }else{
      header('location: ../PED_DIAG_LoginPDE.php');
      }

      }
?>