<!DOCTYPE HTML>
<html class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Native Church</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="plugins/mediaelement/mediaelementplayer.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen" /><![endif]-->
<!-- Color Style -->
<link href="colors/color1.css" rel="stylesheet" type="text/css"> 
<link href="css/custom.css" rel="stylesheet" type="text/css"> 
<!-- SCRIPTS
  ================================================== -->
<script src="js/modernizr.js"></script><!-- Modernizr -->
<script type="text/javascript" src="jquery\jquery.js"></script>
<script type="text/javascript" src="VinculacionUniversidades.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

   <?php 
             include 'php/conexion.php';
             $carreras ="";
             $espacio = "\n";

              $Universidad = $_GET['idUniversidad'];

              $consulta ="SELECT * FROM universidades WHERE idUniversidad ='".$Universidad."'"; 
              $respuesta =mysql_query($consulta); 

              while ($registro=mysql_fetch_array($respuesta)){
                $logo = $registro['logotipo'];
                $nombre = $registro['nombre'];
              }
               $consulta_carreras ="SELECT * FROM carreras WHERE Universidades_idUniversidad ='".$Universidad."'"; 
              $respuesta_carreras=mysql_query($consulta_carreras); 

              while ($registro_carreras=mysql_fetch_array($respuesta_carreras)){
                $carreras = $carreras.$espacio.$registro_carreras['nombre'];
              }

  
              
  ?>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body"> 
  <!-- Start Site Header -->
  <header class="site-header">
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-8">
            <h1 class="logo"> <a href="index.html"><img src="images/logo2.png" alt="Logo"></a> </h1>
          </div>
          <div class="copyrights-col-right col-md-6 col-sm-6">
            <div class="social-icons"> <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a> <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a> <a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-youtube"></i></a> <a href="#"><i class="fa fa-rss"></i></a> </div>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-4">            
            <a href="#" class="visible-sm visible-xs menu-toggle"><i class="fa fa-bars"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="main-menu-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navigation">
              <ul class="sf-menu">
                <li><a href="PED_DIAG_index.php"><i class="fa fa-home fa-lg"></i>&nbsp;&nbsp;&nbsp;Incio</a>
                  <!--<ul class="dropdown">
                    <li><a href="index.html">Home version 1</a></li>
                    <li><a href="index1.html">Home version 2</a></li>
                    <li><a href="index2.html">Home version 3</a></li>
                    <li><a href="index3.html">Home version 4</a></li>
                  </ul>-->
                </li>
               <li><a href="PED_DIAG_EmpresasIndex.php"><i class="fa fa-building fa-lg"></i>&nbsp;&nbsp;&nbsp;Empresas</a>
                  <!--<ul class="dropdown">
                    <li><a href="index.html">Home version 1</a></li>
                    <li><a href="index1.html">Home version 2</a></li>
                    <li><a href="index2.html">Home version 3</a></li>
                    <li><a href="index3.html">Home version 4</a></li>
                  </ul>-->
                </li>
                <li><a href="PED_DIAG_UniversidadesIndex.php"><i class="fa fa-graduation-cap fa-lg"></i>&nbsp;&nbsp;&nbsp;Universidades</a>
                  <!--<ul class="dropdown">
                    <li><a href="about.html">Overview</a></li>
                    <li><a href="contact.html">Where we meet</a></li>
                    <li><a href="our-staff.html">Our Staff</a></li>
                  </ul>-->
                </li>                
                <li><a href="PED_DIAG_ApoyosMuinicipalesIndex.php"><i class="fa fa-users fa-lg"></i>&nbsp;&nbsp;&nbsp;Apoyos</a>
                  <!--<ul class="dropdown">
                    <li><a href="events.html">Events Listing</a></li>
                    <li><a href="events-timeline.html">Events Timeline</a></li>
                    <li><a href="events-calendar.html">Events Calender</a></li>
                    <li><a href="events-grid.html">Events Masonry Grid</a></li>
                    <li><a href="single-event.html">Single Event</a></li>
                  </ul>-->
                </li>
                <li><a href="#"><i class="fa fa-search fa-lg"></i>&nbsp;&nbsp;&nbsp;Busqueda</a>
                  <ul class="dropdown">
                    <li><a href="sermons.html">Vacantes</a></li>
                    <li><a href="single-sermon.html">Concepto</a></li>
                  </ul>
                </li>
                
                <li><a href="PED_DIAG_Contacto.php"><i class="fa fa-envelope fa-lg"></i>&nbsp;&nbsp;&nbsp;Contactanos</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Site Header --> 
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(http://www.conicyt.cl/fondef/files/2012/10/iStock_000017149453Medium.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.html">Index</a></li>
            <li class="active">Vincular Universidad</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- End Nav Backed Header --> 
  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
           <p class="drop-caps secondary">U</br></br><h1>niversidades</h1></p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <!-- Start Colum 1 -->
          <div class="col-md-12"  align="center">
            <form method="post" action="VinculacionUniversidades.php">

              <div class="col-md-12">
                <?php
                echo '<h4 class="spaced">Vinculaci&oacute;n con '.$nombre.'</h4></br>';
                ?>
                </br>              
              </div>

              <div class="col-md-6 col-md-offset-3" align="rights">
                <?php
                echo $logo;
                echo '<a href="'.$logo.'" data-rel="prettyPhoto" class="media-box" style="width:40%" id="img"> <img src="'.$logo.'" alt="Nombre de la empresa"> </a>';
                ?>
                </br>
                </br> 
                <label>Carreras</label>
                <?php
                echo '<textarea  rows="3" class="form-control" name="vacantes" id="vacantes" style="resize:none;overflow:auto;" disabled>'.$carreras.'</textarea>';
                echo '<input type="hidden" id="i" value="'.$Universidad.'">';
                ?>
                <p>_____________________________________________________________________</p>

                <div class="col-md-12 " style="text-align:center" align="center">
                  <h4 class="spaced">Porpuesta de Vinculaci&oacute;n</h4></br>                              
                </div> 

                <label>Necesidad requerida</label>
                <textarea  rows="3" class="form-control" name="descripcion" id="descripcion" style="resize:none;overflow:auto;" required></textarea>
                <?php
                $consulta_select = "SELECT * FROM opcionesvinculacion WHERE Universidades_idUniversidad= '$Universidad'";
                $respuesta_select =mysql_query($consulta_select); 
                echo "<label>Porpuesta de vinculaci&oacute;n&nbsp;</label>";
                echo '<select required id="opcion">';
                
                while ($registro_select=mysql_fetch_array($respuesta_select)){
                     echo "<option value='".$registro_select['descripcion']."'>".$registro_select['descripcion']."</option>";
                 }
                 echo '<option value="default">Otra</option>';
                
                  
                  
                echo "</select>";
                ?>
                </br>
                </br>

                <label id="etiqueta" style="hidden">Otros</label>  
                <input type="text" value="" maxlength="100" class="form-control" name="otro" id="otro">

                <label>Apoyo municipal propuesto</label></br>
                <?php
                $consulta_apoyos = "SELECT * FROM apoyos";
                $respuesta_apoyos =mysql_query($consulta_apoyos); 
                echo '<select required id="apoyos_select">';
                echo '<option value="default">Elige tu opci&oacute;n </option>';
                while ($registro_apoyos=mysql_fetch_array($respuesta_apoyos)){
                     echo "<option value='".$registro_apoyos['nombre']."'>".$registro_apoyos['nombre']."</option>";
                 }
                  
               echo "</select>";
               ?>

                </br>
                </br>
                </br>
                <button type="button" id="correo" class="btn btn-success"><i class="fa fa-external-link fa-lg"></i>&nbsp;&nbsp;&nbsp;Enviar Propuesta</button>
             </div> 
            
            </form>
          </div>         
        </div>
      </div>
    </div>
  </div>
  <!-- Start Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row"> 
        <!-- Start Footer Widgets -->
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">Portal de Desarrollo Empresarial</h4>
          <img src="images/logo3.png" alt="Logo">
          <div class="spacer-20"></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis consectetur adipiscing elit. Nulla convallis egestas rhoncus</p>
        </div>
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">Sitios de Interes</h4>
          <ul>
            <li><a href="#">Gobierno de Fresnillo</a></li>
            <li><a href="#">Desarrollo Economico</a></li>
            <li><a href="#">Coordinación de Servicios</a></li>
            <li><a href="#">Reglamento del Servicio Profesional de Carrera del Municipio</a></li>
            <li><a href="#">Agua Potable y alcantarillado</a></li>            
          </ul>
        </div>
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">Actividad en Twitter</h4>          

            <a class="twitter-timeline" href="https://twitter.com/GermanRodrguez1" data-widget-id="466110213909532672">Tweets por @GermanRodrguez1</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
        </div>
      </div>
    </div>
  </footer>
  <!-- Start Footer -->  
  <footer class="site-footer-bottom">
    <div class="container">
      <div class="row">
        <div class="copyrights-col-left col-md-6 col-sm-6">
          <p>&copy; 2014 NativeChurch. All Rights Reserved</p>
        </div>        
      </div>
    </div>
  </footer>
  <!-- End Footer --> 
  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div>
<script src="js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call --> 
<script src="plugins/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin --> 
<script src="js/helper-plugins.js"></script> <!-- Plugins --> 
<script src="js/bootstrap.js"></script> <!-- UI --> 
<script src="js/waypoints.js"></script> <!-- Waypoints --> 
<script src="plugins/mediaelement/mediaelement-and-player.min.js"></script> <!-- MediaElements --> 
<script src="js/init.js"></script> <!-- All Scripts --> 
<script src="plugins/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider --> 
<script src="plugins/countdown/js/jquery.countdown.min.js"></script> <!-- Jquery Timer --> 
</body>
</html>