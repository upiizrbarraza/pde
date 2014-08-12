<?php
	include 'php/conexion.php';

	//consulta
	$consulta = "SELECT * FROM vacantes";
	$resultado = mysql_query($consulta);

  $idEmpresa = 

	echo '<table class="table table-bordered">';
             
            

       echo "<thead>";
      echo "<tr>";
        echo "<th> Cantidad </th>";
        echo "<th> Descripción </th>";
        echo "<th></th>";
        echo "</tr>";
        echo "</thead>";
      echo "<tbody>";
 

       while($registro = mysql_fetch_array($resultado)){
       echo $registro['cantidad'];
       echo $registro['descripción'];
       }

       echo "</tbody>";
  echo "</table>";
?>