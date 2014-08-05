$( document ).ready(function(){
  
	       
	$('#guardar').click(function(){
   

          var nombre = $("#nombre_universidad").val();
          var direccion = $("#direccion_universidad").val();
          var tel1 = $("#telefono1_universidad").val();
          var tel2 = $("#telefono2_universidad").val();
          var tel3 = $("#telefono3_universidad").val();
          var correo = $("#correo_universidad").val();
          var contacto = $("#num_empleados").val();
          var vision = $("#vision").val();
          var mision = $("#mision").val();
          var sitio = $("#web_universidad").val();
          var log = $("#logo").val();

   if(log != "" && nombre != "" && direccion != "" && tel1 != "" && tel2 != "" && correo != "" && contacto != "" && vision != "" && mision != ""){
          $.ajax({
          	url: "AltaUniversidades.php",
               method: "post",
               data: {lo: log, si: sitio, nom: nombre, dir: direccion, telefono1: tel1, telefono2: tel2, telefono3: tel3, cor: correo, cont: contacto, vis: vision, mis: mision}
          }).done(function(msg){          
          });
       }
	});



$('#eliminar').click(function(){
  

          var nombre = $("#nombre_universidad").val();
          var direccion = $("#direccion_universidad").val();
          
          var correo = $("#correo_universidad").val();

   if(nombre != "" && direccion != "" && correo != ""){
          $.ajax({
            url: "eliminarUniversidades.php",
               method: "post",
               data: {nom: nombre, dir: direccion, cor: correo}
          }).done(function(msg){   
          alert(msg)       
          });
       }
  });
 });

function Guarda(){
  var nombre = $("#nombre_universidad").val();
  $.ajax({
            url: "AltaUniversidades_aux.php",
               method: "post",
               data: {nom: nombre}
          }).done(function(msg){          
          });

}

