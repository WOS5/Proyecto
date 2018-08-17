<?php
	include("../php/conexion_bd.php");

	$id=$_POST['id'];
	$nombre=$_POST['nombre'];

	$query ="INSERT INTO estados (id_estado,nombre_estado) VALUES (".$id.",'".$nombre."')";

	$resultados = sqlsrv_query($con,$query);

	if( $resultados == false )  
	{  
    	echo 1;
	}else{
		echo 2;
	}

?>