<?php
	include("../php/conexion_bd.php");

	$id=$_POST['id'];
	$nombre=$_POST['nombre'];

	$query ="UPDATE estados SET nombre_estado='".$nombre."' where id_estado=".$id."";

	$resultados = sqlsrv_query($con,$query);

	if( $resultados == false )  
	{  
    	echo 1;
	}else{
		echo 2;
	}

?>