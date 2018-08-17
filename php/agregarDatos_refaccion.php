<?php
	include("../php/conexion_bd.php");

	$nombre=$_POST['nombre'];
	$existencia=$_POST['existencia'];
	$catalogo=$_POST['catalogo'];
	$proveedor=$_POST['proveedor'];

	$query ="INSERT INTO Refacciones (descripcion_refaccion,existencia_refaccion,id_catalogo,id_prov) VALUES ('".$nombre."',".$existencia.",".$catalogo.",".$proveedor.")";

	$resultados = sqlsrv_query($con,$query);

	if( $resultados == false )  
	{  
    	echo 1;
	}else{
		echo 2;
	}

?>