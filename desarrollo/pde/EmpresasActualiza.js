$(document).ready(function(){
	$("#Actualizar").click(function(){
		var id = $("#empresa").val();
		var nombre = $("#nombre_empresa").val();
		var direccion = $("#direccion_empresa").val();
		var tel1 = $("#telefono1_empresa").val();
		var tel2 = $("#telefono2_empresa").val();
		var contc = $("#contacto").val();
		var mail = $("#correo_empresa").val();
		var web = $("#web_empresa").val();
		var nEmpleados = $("#num_empleados").val();
		var ant1 = $("#ant1").val();
		var ant2 = $("#ant2").val();
		var ant3 = $("#ant3").val();
		var vacant = $('#vacantes').val();
		var descrip = $('#descripcion').val();
		var visi = $('#vision').val();
		var misi = $('#mision').val();
		var prod = $('#productos').val();
		var logo = $('#logo').val();

   		if(nombre != "" && direccion != ""  && mail != "" && contc != "" && nEmpleados != "" && descrip != "" && visi != "" && misi != "" && vacant != "" && prod != ""){
			if ($('#ant1').attr('checked',true) && $('#ant2').attr('checked',false) && $('#ant3').attr('checked',false)) {
				$.ajax({
					url:"EmpresasActualiza.php",
					type:"POST",
					data:{Id:id, Nombre:nombre, Direccion:direccion, Telefono1:tel1, Telefono2:tel2, Contacto:contc, Correo:mail, Web:web, Empleados:nEmpleados, Ant:ant1, Vacantes:vacant, Descripcion:descrip, Mision:misi, Vision:visi, Productos:prod, Logo:logo}
				});
			}
			else if ($('#ant2').attr('checked',true) && $('#ant1').attr('checked',false) && $('#ant3').attr('checked',false)) {
				$.ajax({
					url:"EmpresasActualiza.php",
					type:"POST",
					data:{Id:id, Nombre:nombre, Direccion:direccion, Telefono1:tel1, Telefono2:tel2, Contacto:contc, Correo:mail, Web:web, Empleados:nEmpleados, Ant:ant1, Vacantes:vacant, Descripcion:descrip, Mision:misi, Vision:visi, Productos:prod, Logo:logo}
				});
			}
			else if ($('#ant3').attr('checked',true) && $('#ant2').attr('checked',false) && $('#ant1').attr('checked',false)) {
				$.ajax({
					url:"EmpresasActualiza.php",
					type:"POST",
					data:{Id:id, Nombre:nombre, Direccion:direccion, Telefono1:tel1, Telefono2:tel2, Contacto:contc, Correo:mail, Web:web, Empleados:nEmpleados, Ant:ant1, Vacantes:vacant, Descripcion:descrip, Mision:misi, Vision:visi, Productos:prod, Logo:logo}
				});
			}
		}
		else{
			alert("no se llenaron todos los campos");
		}	
	})
})