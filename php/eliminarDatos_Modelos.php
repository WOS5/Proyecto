<?php
	include("../php/conexion_bd.php");

	$id_modelo=$_POST['id'];

	$query="delete from Modelos where id_modelo=".$id_modelo;

	$resultados=sqlsrv_query($con, $query);

	if( $resultados == false )  
	{  
    	echo 1;
	}else{
		echo 2;
	}
?>