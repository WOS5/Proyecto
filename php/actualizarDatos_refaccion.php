<?php
	include("../php/conexion_bd.php");

	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$existencia=$_POST['existencia'];
	$catalogo=$_POST['catalogo'];
	$proveedor=$_POST['proveedor'];

	$query ="UPDATE Refacciones SET descripcion_refaccion='".$nombre."', existencia_refaccion='".$existencia."', id_catalogo='".$catalogo."', id_prov='".$proveedor."' where folio_refaccion=".$id."";

	$resultados = sqlsrv_query($con,$query);

	if( $resultados == false )  
	{  
    	echo 1;
	}else{
		echo 2;
	}

?>