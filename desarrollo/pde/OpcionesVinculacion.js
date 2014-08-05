$( document ).ready(function(){
	$('#guardar').click(function(){
	var nombre = $('#cantidad').val();
	var id = $('#uni').val();

 
          $.ajax({
          	
          	method: "post",
			url: "OpcionesVinculacion.php",
			data: {i: id, nom: nombre}
              
          }).done(function(msg){
            
              $('#mostraraqui').html(msg).fadeOut(1000).fadeIn(2000); 
          });
          });
	
});