
$( document ).ready(function(){
	       
	$('#Guardar').click(function(){
    var vacio ='';
      var nombre_auxv = $("#n").val(); 
     var nombre = $("#nombre_universidad").val();
          var objetivo = $("#objetivo").val();
          var ingreso = $("#ingreso").val();
          var egreso = $("#egreso").val();
          var campo = $("#campo").val();
          var alumnos = $("#num_empleados").val();
          

   if(objetivo != "" && ingreso != "" && egreso != "" && campo != "" && alumnos != ""){
          $.ajax({
          	url: "carrerasAlta.php",
               method: "post",
               data: {nombre_aux: nombre_auxv, nom: nombre, o:objetivo, ing: ingreso, eg: egreso, cam: campo, alu: alumnos}
          }).done(function(msg){          
          });

           $("#nombre_universidad").val(vacio);
       $("#objetivo").val(vacio);
       $("#ingreso").val(vacio);
       $("#egreso").val(vacio);
       $("#campo").val(vacio);
       $("#num_empleados").val(vacio);
       }

      
	});


   $('#borra').click(function(){
          
          var nombre = $("#nombre_universidad").val();
        
  
          $.ajax({
            url: "carrerasBorrar.php",
               method: "post",
               data: {nom: nombre}
          }).done(function(msg){          
          });
       
  });
});