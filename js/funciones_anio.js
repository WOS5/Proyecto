function agregardatos(id,fecha){

	cadena="id=" + id + "&fecha=" + fecha;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos_anio.php",
		data:cadena,
		success:function(r){
			if(r==2){
				$('#tabla').load('componentes/consulta_anio.php');
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
}


function actualizaDatos(){
	id=$('#idu').val();
	nombre=$('#nombreu').val();

	cadena="id=" + id + "&nombre=" + nombre;

	$.ajax({
		type:"POST",
		url:"php/actualizarDatos_marca.php",
		data:cadena,
		success:function(r){
			if(r==2){
				$('#tabla').load('componentes/consulta_marca.php');
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
		url:"php/eliminarDatos_marca.php",
		data:cadena,
		success:function(r){
			if(r==2){
				$('#tabla').load('componentes/consulta_marca.php');
				alertify.success("eliminado con exito");
			}else{
				alertify.error("fallo la eliminacion");
			}
		}
	});
}