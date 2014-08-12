$( document ).ready(function(){

         
  $('#guarda').click(function(){
    
   
          
          var boton = 1;
          var boton1 = 0;
          var nombre = $("#nombre_universidad").val();
          var direccion = $("#direccion_universidad").val();
          var tel1 = $("#telefono1_universidad").val();
          var tel2 = $("#telefono2_universidad").val();
          var como = $("#c_llegar").val();
          var correo = $("#correo_universidad").val();
          var contacto = $("#num_empleados").val();
          var vision = $("#vision").val();
          var mision = $("#mision").val();
          
          var sitio = $("#web_universidad").val();
          var log = $("#logo").val();
          

   
   if(log != "" && nombre != "" && direccion != "" && tel1 != "" && tel2 != "" && correo != "" && contacto != "" && vision != "" && mision != ""){
         if(document.getElementById('ant1').checked){
          
          $.ajax({
            url: "UniversidadesAlta.php",
               method: "post",
               data: {radio :boton, c: como, lo: log, si: sitio, nom: nombre, dir: direccion, t1: tel1, t2: tel2, cor: correo, cont: contacto, vis: vision, mis: mision}
          }).done(function(msg){  
          
              
          });
        }
        else{
         
          $.ajax({
            url: "UniversidadesAlta.php",
               method: "post",
               data: {radio :boton1, c: como, lo: log, si: sitio, nom: nombre, dir: direccion, t1: tel1, t2: tel2, cor: correo, cont: contacto, vis: vision, mis: mision}
          }).done(function(msg){   
              
          });

        }
       }
  });



$('#eliminar').click(function(){

          var nombre = $("#nombre_universidad").val();
          

   if(nombre != ""){
          $.ajax({
            url: "UniversidadesEliminar.php",
               method: "post",
               data: {nom: nombre, dir: direccion, cor: correo}
          }).done(function(msg){   
           
                
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

function vincular(){
	var nombre = document.getElementById('nombre_universidad').value;
	var direccion = "PED_DIAG_OpcionesVinculacion.php?name=";

	window.location.href =direccion+nombre;
}


