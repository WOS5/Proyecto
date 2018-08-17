<?php
	include("../php/conexion_bd.php");

	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$categoria=$_POST['categoria'];

	$query ="UPDATE subCategorias SET nombre_subcategoria='".$nombre."', id_categoria='".$categoria."' where id_subcategoria=".$id."";

	$resultados = sqlsrv_query($con,$query);

	if( $resultados == false )  
	{  
    	echo 1;
	}else{
		echo 2;
	}

?>