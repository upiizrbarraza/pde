$( document ).ready(function(){
    var id = $("#universidad").val();
    var nombre_uni = $("#nombre_uni").val();
    var direccion_uni = $("#direccion_uni").val();
    var telefono1_uni = $("#telefono1_uni").val();
    var telefono2_uni = $("#telefono2_uni").val();
    var correo_uni = $("#correo_uni").val();
    var como_uni = $("#como_uni").val();
    var sitio_uni = $("#sitio_uni").val();
    var contacto_uni = $("#contacto_uni").val();
    var mision_uni = $("#mision_uni").val();
    var vision_uni = $("#vision_uni").val();
    var servicio_uni = $("#servicio_uni").val();
    var logo_uni = $("#logo_uni").val();

    if(servicio_uni==1){
      $('#ant1').attr('checked',true) 
    }
    else{
      $('#ant1').attr('checked',false)
    }

    $("#nombre_universidad").val(nombre_uni);
    $("#direccion_universidad").val(direccion_uni);
    $("#telefono1_universidad").val(telefono1_uni);
    $("#telefono2_universidad").val(telefono2_uni);
    $("#c_llegar").val(como_uni);
    $("#correo_universidad").val(correo_uni);
    $("#num_empleados").val(contacto_uni);
     $("#vision").val(vision_uni);
     $("#mision").val(mision_uni);
     
     $("#web_universidad").val(sitio_uni);
    

    


  
	       
	$('#actualizar').click(function(){
   
          var id = $("#universidad").val();
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
          var myv = $("#ant1").val();
          var sitio = $("#web_universidad").val();
          var log = $("#logo").val();
          

   
   if(nombre != "" && direccion != "" && tel1 != "" && tel2 != "" && correo != "" && contacto != "" && vision != "" && mision != ""){
         if(document.getElementById('ant1').checked){
          
          $.ajax({
          	url: "UniversidadesActualiza.php",
               method: "post",
               data: {radio :boton, c: como, Id: id, m: myv, lo: log, si: sitio, nom: nombre, dir: direccion, t1: tel1, t2: tel2, cor: correo, cont: contacto, vis: vision, mis: mision}
          }).done(function(msg){   
              
          });
        }
        else{
         
          $.ajax({
            url: "UniversidadesActualiza.php",
               method: "post",
               data: {radio :boton1, c: como, Id: id, m: myv, lo: log, si: sitio, nom: nombre, dir: direccion, t1: tel1, t2: tel2, cor: correo, cont: contacto, vis: vision, mis: mision}
          }).done(function(msg){   
              
          });

        }
       }
	});



$('#eliminar').click(function(){

          var nombre = $("#nombre_universidad").val();
          var direccion = $("#direccion_universidad").val();
          var correo = $("#correo_universidad").val();

   if(nombre != "" && direccion != "" && correo != ""){
          $.ajax({
            url: "UniversidadesEliminar.php",
               method: "post",
               data: {nom: nombre, dir: direccion, cor: correo}
          }).done(function(msg){   
           
                
          });
       }
  });
 });

function vincular(){
  var nombre = document.getElementById('nombre_universidad').value;
  var direccion = "PED_DIAG_OpcionesVinculacion.php?name=";

  window.location.href =direccion+nombre; 
}



