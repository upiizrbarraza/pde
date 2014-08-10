<?php

	// Código PHP para manipular archivos.
	// La información de los inputs se toma por el name de la etiqueta en el archivo HTML.

	$return = Array('ok'=>TRUE);

	// Carpeta del servidor en el que se va a guardar el archivo.
	$upload_folder ='../images/usuarios';

	// 'archivoImage' es el name del input[type="file"] en el archivo HTML
	$nombre_archivo = $_FILES['archivoImage']['name'];
	$tipo_archivo = $_FILES['archivoImage']['type'];
	$tamano_archivo = $_FILES['archivoImage']['size'];
	$tmp_archivo = $_FILES['archivoImage']['tmp_name'];

	// Ruta final del archvo
	$archivador = $upload_folder . '/'.$nombre_archivo;

	// Se verifica si se subió bien el archivo.
	if (!move_uploaded_file($tmp_archivo, $archivador)) {
		$return = Array('ok' => FALSE, 'msg' => "Ocurrio un error al subir el archivo. No pudo guardarse.", 'status' => 'error');
	}

?>