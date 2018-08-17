<?php
	include("../php/conexion_bd.php");

	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$ciudad=$_POST['ciudad'];

	$query ="INSERT INTO almacenes (id_alm,nombre_alm,id_ciudad) VALUES (".$id.",'".$nombre."',".$ciudad.")";

	$resultados = sqlsrv_query($con,$query);

	if( $resultados == false )  
	{  
    	echo 1;
	}else{
		echo 2;
	}

?>