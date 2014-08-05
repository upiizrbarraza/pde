<?php
include 'php/conexion.php';

 $nombre_uni = $_POST['i'];
 $encontrar_uni = "SELECT * FROM universidades WHERE nombre = '".$nombre_uni."'";
 $consulta_uni = mysql_query($encontrar_uni);
 
       while($registro_uni = mysql_fetch_array($consulta_uni)){
        $encontrado = $registro_uni['idUniversidad'];
       }



 $consulta = "SELECT * FROM opcionesvinculacion WHERE Universidades_idUniversidad = '$encontrado'";
 $resultado = mysql_query($consulta);




 
      echo "<table class='table table-bordered'>";
      echo "<thead>";
      echo  "<tr>";
      echo "<th> Opci&oacute;n de Vinculaci&oacute; </th>";                  
      echo "<th> Herramientas </th> ";                 
      echo "</tr>";
      echo "</thead>";
            
      echo "<tbody>";
 

       while($registro = mysql_fetch_array($resultado)){
                                            

       echo "<tr>";
      
       echo "<td>".$registro['descripcion']."</td>";
       echo "<td>";
      $orden_actualizar ="Actualiza('".$registro['idOpcion']."')";
       echo '<i class="fa fa-pencil fa-lg" onclick="'.$orden_actualizar.'"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
       $orden_borrar ="Borrar('".$registro['idOpcion']."')";
       echo '<i class="fa fa-times-circle fa-lg" onclick="'.$orden_borrar.'"></i> '; 
       echo "</td>";                  
       echo "</tr>"; 
      
      
       echo "</tr>";
      
   }
  echo "</tbody>";
  echo "</table>";

                            
       

 mysql_free_result($resultado);

 //cerrar la base de datos
 mysql_close($link);
?>
