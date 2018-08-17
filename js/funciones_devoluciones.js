function agregardatos(id,almacen,observacion,refaccion,cantidad){

	cadena="id=" + id + "&almacen=" + almacen + "&observacion=" + observacion + "&refaccion=" + refaccion + "&cantidad=" +cantidad;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos_devolucion.php",
		data:cadena,
		success:function(r){
			if(r==2){
				$('#tabla').load('componentes/consulta_devolucion.php');
				alertify.success("agregado con exito");
			}else{
				alertify.error("fallo el insert");
			}
		}
	});
}