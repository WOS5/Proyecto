function agregardatos(id,nombre,ciudad){

	cadena="id=" + id + "&descripcion=" + descripcion + "&marca=" + marca;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos_Modelos.php",
		data:cadena,
		success:function(r){
			if(r==2){
				$('#tabla').load('componentes/consulta_Modelos.php');
				alertify.success("agregado con exito");
			}else{
				alertify.error("fallo el insert");
			}
		}
	});
}


function modificadato(datos){
	d=datos.split('||');
	$('#idu').val(d[0]);
	$('#descripcionu').val(d[1]);
	$('#marcau').val(d[2]);
}

function actualizaDatos(){
	id=$('#idu').val();
	descripcion=$('#descripcionu').val();
	marca=$('#marcau').val();

	cadena="id=" + id + "&descripcion=" + descripcion + "&marca=" + marca;

	$.ajax({
		type:"POST",
		url:"php/actualizarDatos_Modelos.php",
		data:cadena,
		success:function(r){
			if(r==2){
				$('#tabla').load('componentes/consulta_Modelos.php');
				alertify.success("modificado con exito");
			}else{
				alertify.error("fallo la modificacion"+r);
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
		url:"php/eliminarDatos_Modelos.php",
		data:cadena,
		success:function(r){
			if(r==2){
				$('#tabla').load('componentes/consulta_Modelos.php');
				alertify.success("eliminado con exito");
			}else{
				alertify.error("fallo la eliminacion");
			}
		}
	});
}