function agregardatos(nombre,existencia,catalogo,proveedor){

	cadena="nombre=" + nombre + "&existencia=" + existencia + "&catalogo=" + catalogo + "&proveedor=" + proveedor;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos_refaccion.php",
		data:cadena,
		success:function(r){
			if(r==2){
				$('#tabla').load('componentes/consulta_refaccion.php');
				alertify.success("agregado con exito");
			}else{
				alertify.error("fallo el insert"+r);
			}
		}
	});
}


function modificadato(datos){
	d=datos.split('||');
	$('#idu').val(d[0]);
	$('#nombreu').val(d[1]);
	$('#existenciau').val(d[2]);
	$('#catalogou').val(d[3]);
	$('#proveedoru').val(d[4]);
}


function actualizaDatos(){
	id=$('#idu').val();
	nombre=$('#nombreu').val();
	existencia=$('#existenciau').val();
	catalogo=$('#catalogou').val();
	proveedor=$('#proveedoru').val();

	cadena="id=" + id +"&nombre=" + nombre + "&existencia=" + existencia + "&catalogo=" + catalogo + "&proveedor=" + proveedor;

	$.ajax({
		type:"POST",
		url:"php/actualizarDatos_refaccion.php",
		data:cadena,
		success:function(r){
			if(r==2){
				$('#tabla').load('componentes/consulta_refaccion.php');
				alertify.success("modificado con exito");
			}else{
				alertify.error("fallo la modificacion");
			}
		}
	});
}

function preguntarSiNo(id){
	alertify.confirm('Eliminar Dato', 'Estas segur@? No se podran recuperar los datos', 
		function(){ eliminarDatos(id) }
        , function(){ alertify.error('Se cancelo la operacion')});
}


function eliminarDatos(id){
	cadena="id=" + id;

	$.ajax({
		type:"POST",
		url:"php/eliminarDatos_refaccion.php",
		data:cadena,
		success:function(r){
			if(r==2){
				$('#tabla').load('componentes/consulta_refaccion.php');
				alertify.success("eliminado con exito");
			}else{
				alertify.error("fallo la eliminacion");
			}
		}
	});
}