$( document ).ready(function(){
	var id = $('#uni').val();
 
          $.ajax({
          	method: "post",
          	url: "CarrerasListado.php",
			data: {i: id}
              
          }).done(function(msg){
            
             $('#mostraraqui').html(msg).fadeOut(1000).fadeIn(2000); 
          });
	
});
function Actualiza(x){

	
	var direccion = "PED_DIAG_CarrerasActualiza.php?id=";

	window.location.href =direccion+x;
	

}
function Borrar(x){
 $(document).ready(function(){  
     
          $.ajax({
            url: "carrerasBorrar.php",
               method: "post",
               data: {id: x}
          }).done(function(msg){  
          $('#mostraraqui').html(msg).fadeOut(1000).fadeIn(2000);         
          });

        
       
  });
}

function Detalle(z){
	var direccion_detalle = "PED_DIAG_CarrerasDetalleActualizacion.php?id=";

	window.location.href =direccion_detalle+z;

}