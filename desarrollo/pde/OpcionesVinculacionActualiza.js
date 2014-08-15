$( document ).ready(function(){
	$('#guardar').click(function(){
    var vacio = '';
	var nombre = $('#cantidad').val();
	var id = $('#uni').val();

 
          $.ajax({
          	
          	method: "post",
			url: "OpcionesVinculacionActualiza.php",
			data: {i: id, nom: nombre}
              
          }).done(function(msg){
            
              $('#mostraraqui').html(msg).fadeOut(1000).fadeIn(2000); 
          });
          $('#cantidad').val(vacio);
          });

  
	
});