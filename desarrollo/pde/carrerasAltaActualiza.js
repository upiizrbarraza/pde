$( document ).ready(function(){
	       
	$('#Guardar').click(function(){
    
          var nombre_auxv = $("#n").val(); 
          var nombre = $("#nombre_universidad").val();
          var objetivo = $("#objetivo").val();
          var ingreso = $("#ingreso").val();
          var egreso = $("#egreso").val();
          var campo = $("#campo").val();
          var alumnos = $("#num_empleados").val();
          

   if(objetivo != "" && ingreso != "" && egreso != "" && campo != "" && alumnos != ""){
          $.ajax({
          	url: "carrerasAltaActualiza.php",
               method: "post",
               data: {nombre_aux: nombre_auxv, nom: nombre, o:objetivo, ing: ingreso, eg: egreso, cam: campo, alu: alumnos}
          }).done(function(msg){   
          history.back();       
          });

          
       }
       else{
        alert('Aviso: Faltan Campos')
       }

      
	});
});
