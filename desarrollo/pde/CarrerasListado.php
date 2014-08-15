<?php

include 'php/conexion.php';

 
              $Universidad = $_POST['i'];
               $consulta ="SELECT * FROM carreras WHERE Universidades_idUniversidad ='".$Universidad."'"; 
              $respuesta =mysql_query($consulta); 
      echo "<table class='table table-bordered'>";
     echo " <thead>";
      echo "<tr>";
      echo "<th> Carrera</th>";                  
      echo "<th> Herramientas </th> "; 
                    
      echo "</tr>";
      echo "</thead>";
            
      echo "<tbody>";
        
 

       

       while($registro = mysql_fetch_array($respuesta)){
                                            

       echo "<tr>";
      
       echo "<td>".$registro['nombre']."</td>";
       echo "<td>";
      $orden_actualizar ="Actualiza('".$registro['idCarrera']."')";
       echo '<i class="fa fa-pencil fa-lg" onClick="'.$orden_actualizar.'" ></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
       $orden_borrar ="Borrar('".$registro['idCarrera']."')";
       echo '<i class="fa fa-times-circle fa-lg" onClick="'.$orden_borrar.'" ></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; 
       $detalle ="Detalle('".$registro['idCarrera']."')"; 
       echo '<i class="fa fa-search fa-lg" onClick="'.$detalle.'"></i>';
       echo "</td>";                  
       echo "</tr>"; 
      
      
       echo "</tr>";
      
   }
   echo "</tbody>";
      echo "</table>"; 
   ?>