 <?php
include 'php/conexion.php';

 $consulta = "SELECT * FROM universidades";
 $resultado = mysql_query($consulta);



 
        echo '<table class="table table-bordered">';
             
            

       echo "<thead>";
      echo "<tr>";
        echo "<th> # </th>";
        echo "<th> Universidad </th>";
        echo "<th> Direcci&oacute;n </th>";
        echo "<th> Carreras </th>";
         echo "<th> Contacto </th>";
        echo "<th> Telefono </th>";
        echo "<th> Ver </th>";
        echo "</tr>";
        echo "</thead>";
      echo "<tbody>";
 

       while($registro = mysql_fetch_array($resultado)){
        $carreras= "";
       $auxiliar = $registro['idUniversidad'];
       $consulta_carreras = "SELECT * FROM carreras WHERE Universidades_idUniversidad = $auxiliar";
       $resultado_carreras = mysql_query($consulta_carreras);

       while($registro_carreras = mysql_fetch_array($resultado_carreras)){
           $carreras = $carreras."<br />".$registro_carreras['nombre'];

       }
       
      


       echo "<tr>";
      
       echo "<td>".$registro['idUniversidad']."</td>";
       echo "<td>".$registro['nombre']."</td>";
       echo "<td>".$registro['direccion']."</td>";
       echo "<td>".$carreras."</td>";
       echo "<td>".$registro['contacto']."</td>";
       echo "<td>".$registro['telefono1']."</td>";
       echo "<td>";
      // $orden = $registro['idUniversidad'];
       //echo '<input type="hidden" id="valor" value="'.$registro['idUniversidad'].'">';
       echo "<a href='PED_DIAG_UniversidadesDetalles.php?idUniversidad=".$registro['idUniversidad']."'><button type='submit' class='btn btn-primary'>Detalles</button></a>";
       echo "<br />";
       echo "<br />";
       echo "<a href='PED_DIAG_UniversidadesVincular.php?idUniversidad=".$registro['idUniversidad']."'><button type='button' class='btn btn-info'>Vincular</button></a>";
         echo "<br />";
       echo "<br />";
       echo "<a href='PED_DIAG_UniversidadesActualiza.php?idUniversidad=".$registro['idUniversidad']."'><button type='button' class='btn btn-primary'>Actualizar</button></a>";
       echo "</td>";
       echo "</tr>";
      
   }
  echo "</tbody>";
  echo "</table>";





       

 mysql_free_result($resultado);

 //cerrar la base de datos
 mysql_close($link);
?>
