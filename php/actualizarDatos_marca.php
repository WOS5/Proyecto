<?php
	include("../php/conexion_bd.php");

	$id=$_POST['id'];
	$nombre=$_POST['nombre'];

	$query ="UPDATE Marcas SET nombre_marca='".$nombre."' where id_marca=".$id."";

	$resultados = sqlsrv_query($con,$query);

	if( $resultados == false )  
	{  
    	echo 1;
	}else{
		echo 2;
	}

?>