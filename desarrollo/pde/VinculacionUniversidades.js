$( document ).ready(function(){
  $("#otro").hide();
  $("#etiqueta").hide();



  $('#opcion').change(function(){
    var opcion_checar = $("#opcion").val();
     var otro_checar = $("#otro").val();
      var etiqueta_checar = $("#etiqueta").val();

      if(opcion_checar == 'default'){
      $("#otro").show();
  $("#etiqueta").show();

  }
  else{
     $("#otro").hide();
     $("#etiqueta").hide();
  }

        
        });
       


  
	$('#correo').click(function(){
    

          var id = $("#i").val();
          
          var apoyo = $("#apoyos_select").val();
          var descripcion = $("#descripcion").val();
          var opcion = $("#opcion").val();
          var otro = $("#otro").val();
          

          if(opcion != "default"){
            

          $.ajax({

          	   url: "VinculacionUniversidades.php",
               method: "post",
               data: {ide: id, des:descripcion, op: opcion, apo: apoyo}
          }).done(function(msg){  
            alert(msg)
            

          });
        }
        else{
           $.ajax({

               url: "VinculacionUniversidades.php",
               method: "post",
               data: {ide: id, des:descripcion, op: otro, apo: apoyo}
          }).done(function(msg){  
             alert(msg)

          });

        }
	});
  });


