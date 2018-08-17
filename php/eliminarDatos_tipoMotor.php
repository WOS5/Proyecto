<?php
	include("../php/conexion_bd.php");

	$id=$_POST['id'];

	$query="delete from tipo_Motores where id_tipoMotor=".$id;

	$resultados=sqlsrv_query($con, $query);

	if( $resultados == false )  
	{  
    	echo 1;
	}else{
		echo 2;
	}
?>