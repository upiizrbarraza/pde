function detalles(empresa){
	$(document).ready(function(){
		var idEmp = empresa;

		$.ajax({
			method: "post",
			url: "PED_DIAG_EmpresasDetallesPRUEBA.php",
			data: {idempresa: idEmp}
		}).done(function(){
			window.open("PED_DIAG_EmpresasDetallesPRUEBA.php","_self");
		});
	});
}