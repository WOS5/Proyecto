function agregardatos(id,refaccion,cantidad,almacen){

	cadena="id=" + id + "&refaccion=" + refaccion + "&cantidad=" + cantidad + "&almacen=" + almacen;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos_salida.php",
		data:cadena,
		success:function(r){
			if(r==2){
				$('#tabla').load('componentes/consulta_salidas.php');
				alertify.success("agregado con exito");
			}else{
				alertify.error("fallo el insert");
			}
		}
	});
}