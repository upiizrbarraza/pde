$(document).ready(function(){
	// Función para enviar un formulario completo mediante jQuery.
	// 'form#formulario' significa que la etiqueta form tiene el id llamado formulario
	$('form#formulario').submit(function(){
		// Deshabilita la función de enviar el formulario desde el archivo HTML
		event.preventDefault();

		// Se crea un objeto tipo FormData para guardar toda la información del formulario (información y archivos).
		var formData = new FormData($(this)[0]);

		$.ajax({
			url:'subir.php',
			type:'POST',
			// Sólo se envía el objeto formData.
			data:formData,
			async:false,
			cache:false,
			contentType:false,
			processData:false,
			success: function(returndata){
				// 
			}
		});
	});
});