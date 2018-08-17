function agregardatos(nombre){

	cadena="nombre=" + nombre;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos_categoria.php",
		data:cadena,
		success:function(r){
			if(r==1){
				alertify.error("fallo el insert");
			}else{
				$('#tabla').load('componentes/consulta_categoria.php');
				alertify.success("agregado con exito");
			}
		}
	});
}


function modificadato(datos){
	d=datos.split('||');
	$('#id_categoriau').val(d[0]);
	$('#nombre_categoriau').val(d[1]);
}


function actualizaDatos(){
	id=$('#id_categoriau').val();
	nombre=$('#nombre_categoriau').val();

	cadena="id=" + id + "&nombre=" + nombre;

	$.ajax({
		type:"POST",
		url:"php/actualizarDatos_categoria.php",
		data:cadena,
		success:function(r){
			if(r==1){
				alertify.error("fallo la modificacion");
			}else{
				$('#tabla').load('componentes/consulta_categoria.php');
				alertify.success("modificado con exito");
			}
		}
	});
}

function preguntarSiNo(id){
	alertify.confirm('Eliminar Dato', 'Estas segur? No se podran recuperar los datos', 
		function(){ eliminarDatos(id) }
        , function(){ alertify.error('Se cancelo la operacion')});
}


function eliminarDatos(id){
	cadena="id=" + id;

	$.ajax({
		type:"POST",
		url:"php/eliminarDatos_categoria.php",
		data:cadena,
		success:function(r){
			if(r==1){
				alertify.error("fallo la eliminacion");
			}else{
				$('#tabla').load('componentes/consulta_categoria.php');
				alertify.success("eliminado con exito");
			}
		}
	});
}