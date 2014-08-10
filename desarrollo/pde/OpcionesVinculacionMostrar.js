$( document ).ready(function(){
	var id = $('#uni').val();
 
          $.ajax({
          	method: "post",
          	url: "OpcionesVinculacionMostrar.php",
			data: {i: id}
              
          }).done(function(msg){
            
             $('#mostraraqui').html(msg).fadeOut(1000).fadeIn(2000); 
          });
	
});

function Borrar(x){

	$( document ).ready(function(){
		var id = $('#uni').val();
		var vid = x;
	$.ajax({
			url: 'delete_opcion.php',
			type: "POST",
			data: {noid: vid, i:id}

		}).done(function(msg2){
			$('#mostraraqui').html(msg2).fadeOut(1000).fadeIn(3000);
		});
	
});

}

function Actualiza(y){
    var vacio = '';
	var id = $('#uni').val();
	var valor_caja = $('#cantidad').val();
	var vide = y;
	 
	 
	$.ajax({
			url: 'actualizar_opcion.php',
			type: "POST",
			data: {noid: vide, actua: valor_caja, i:id}

		}).done(function(msg3){
			$('#mostraraqui').html(msg3).fadeOut(1000).fadeIn(3000);
		});

		$('#cantidad').val(vacio);

}