$(document).ready(function(){	


	var solicitar = document.getElementById("solicitaMisVis");
	
	   if($('#solicitaMisVis').attr('checked',true)){
            $('#vision').prop('disabled', true);
			$('#mision').prop('disabled', true);
        }
        else{
        	$('#vision').prop('disabled', false);
			$('#mision').prop('disabled', false);
            
        }

	$('#Guardar').click(function(){

		var nombreV = $('#nombre_empresa').val();
		var direccionV = $('#direccion_empresa').val();
		var tel1V = $('#telefono1_empresa').val();
		var tel2V = $('#telefono2_empresa').val();
		var contactoV = $('#contacto').val();
		var correoV = $('#correo_empresa').val();
		var sitiowebV = $('#web_empresa').val();
		var numEmpleadosV = $('#num_empleados').val();
		var anitg1V = $('#ant1').val();
		var anitg2V = $('#ant2').val();
		var anitg3V = $('#ant3').val();
		var vacantV = $('#vacantes').val();
		var descripV = $('#descripcion').val();
		var visiV = $('#vision').val();
		var misiV = $('#mision').val();
		var prodV = $('#productos').val();
		var logoV = $('#logo').val();

   		if(nombreV != "" && direccionV != ""  && correoV != "" && contactoV != "" && numEmpleadosV != "" && descripV != "" && visiV != "" && misiV != "" && vacantV != "" && prodV != ""){
			if ($('#ant1').attr('checked',true) && $('#ant2').attr('checked',false) && $('#ant3').attr('checked',false)) {
				$.ajax({
					url:"EmpresasAlta.php",
					type:"POST",
					data:{Nombre:nombreV, Direccion:direccionV, Telefono1:tel1V, Telefono2:tel2V, Contacto:contactoV, Correo:correoV, Web:sitiowebV, Empleados:numEmpleadosV, Ant:anitg1V, Vacantes:vacantV, Descripcion:descripV, Mision:misiV, Vision:visiV, Productos:prodV, Logo:logoV}
				
				});
			}
			else if ($('#ant2').attr('checked',true) && $('#ant1').attr('checked',false) && $('#ant3').attr('checked',false)) {
				$.ajax({
					url:"EmpresasAlta.php",
					type:"POST",
					data:{Nombre:nombreV, Direccion:direccionV, Telefono1:tel1V, Telefono2:tel2V, Contacto:contactoV, Correo:correoV, Web:sitiowebV, Empleados:numEmpleadosV, Ant:anitg2V, Vacantes:vacantV, Descripcion:descripV, Mision:misiV, Vision:visiV, Productos:prodV, Logo:logoV}
				});
			}
			else if ($('#ant3').attr('checked',true) && $('#ant2').attr('checked',false) && $('#ant1').attr('checked',false)) {
				$.ajax({
					url:"EmpresasAlta.php",
					type:"POST",
					data:{Nombre:nombreV, Direccion:direccionV, Telefono1:tel1V, Telefono2:tel2V, Contacto:contactoV, Correo:correoV, Web:sitiowebV, Empleados:numEmpleadosV, Ant:anitg3V, Vacantes:vacantV, Descripcion:descripV, Mision:misiV, Vision:visiV, Productos:prodV, Logo:logoV}
				});
			}
		}	
	});
});

