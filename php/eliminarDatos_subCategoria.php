<?php
	include("../php/conexion_bd.php");

	$id=$_POST['id'];

	$query="delete from subCategorias where id_subcategoria=".$id;

	$resultados=sqlsrv_query($con, $query);

	if( $resultados == false )  
	{  
    	echo 1;
	}else{
		echo 2;
	}
?>