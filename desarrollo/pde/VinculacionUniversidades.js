$( document ).ready(function(){
  
	$('#correo').click(function(){
    

          var id = $("#i").val();
          
          var descripcion = $("#descripcion").val();
         
          var opcion = $("#opcion").val();
          var otro = $("#otro").val();

          if(opcion != "default"){
            alert('es diferente')

          $.ajax({

          	   url: "VinculacionUniversidades.php",
               method: "post",
               data: {ide: id, des:descripcion, op: opcion}
          }).done(function(msg){  
             alert(msg)

          });
        }
        else{
           $.ajax({

               url: "VinculacionUniversidades.php",
               method: "post",
               data: {ide: id, des:descripcion, op: otro }
          }).done(function(msg){  
             alert(msg)

          });

        }
	});
  });

