$( document ).ready(function(){
 
          $.ajax({
          	
          	url: "MostrarUniversidades.php",
              
          }).done(function(msg){
            
             $('#mostraraqui').html(msg).fadeOut(1000).fadeIn(2000); 
          });
	
});



