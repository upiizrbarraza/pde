$(document).ready(function(){
	$.ajax({
		url: "MostrarVacantes.php",
		
	}).done(function(msg){
		$("#registro").html(msg).fadeOut(1000).fadeIn(1000);
	});
	
});