<?php
	include("../php/conexion_bd.php");

	$id=$_POST['id'];
	$nombre=$_POST['nombre'];

	$query ="INSERT INTO tipo_Motores (id_tipoMotor,descripcion_tipoMotor) VALUES (".$id.",'".$nombre."')";

	$resultados = sqlsrv_query($con,$query);

	if( $resultados == false )  
	{  
    	echo 1;
	}else{
		echo 2;
	}

?>