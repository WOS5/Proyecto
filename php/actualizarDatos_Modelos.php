<?php
	include("../php/conexion_bd.php");

	$id=$_POST['id'];
	$descripcion=$_POST['descripcion'];
	$marca=$_POST['marca'];

	$query ="UPDATE Modelos SET descripcion_modelo='".$descripcion."', id_marca='".$marca."' where id_modelo=".$id."";

	$resultados = sqlsrv_query($con,$query);

	if( $resultados == false )  
	{  
    	echo 1;
	}else{
		echo 2;
	}

?>