
  

function Actualiza(x){
  $(document).ready(function(){ 
         
         var nombre_aux = '#nombre_universidad'+x;
         var objetivo_aux = '#objetivo'+x;
         var ingreso_aux = '#ingreso'+x;
         var egreso_aux = '#egreso'+x;
         var campo_aux = '#campo'+x;
         var alumnos_aux = '#num_empleados'+x;


         var vacio = '';
         
          var nombre = $(nombre_aux).val();
          var objetivo = $(objetivo_aux).val();
          var ingreso = $(ingreso_aux).val();
          var egreso = $(egreso_aux).val();
          var campo = $(campo_aux).val();
          var alumnos = $(alumnos_aux).val();
         // var id = $("#n").val();
         
          
           if(objetivo != "" && ingreso != "" && egreso != "" && campo != "" && alumnos != ""){
          $.ajax({
            url: "CarrerasModificar.php",
               method: "post",
               data: {ide: x, nom: nombre, o:objetivo, ing: ingreso, eg: egreso, cam: campo, alu: alumnos}
          }).done(function(msg){ 
                 history.back();
          });

        
       }

       });
    
  }