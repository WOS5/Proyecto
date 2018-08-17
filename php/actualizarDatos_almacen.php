<?php
	include("../php/conexion_bd.php");

	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$ciudad=$_POST['ciudad'];

	$query ="UPDATE almacenes SET nombre_alm='".$nombre."', id_ciudad='".$ciudad."' where id_alm=".$id."";

	$resultados = sqlsrv_query($con,$query);

	if( $resultados == false )  
	{  
    	echo 1;
	}else{
		echo 2;
	}

?>