<?php
	include("../php/conexion_bd.php");

	$id=$_POST['id'];
	$fecha=$_POST['fecha'];

	$fecha2=$fecha;

	$query ="INSERT INTO Anios (id_anios,descripcion_anios) VALUES (".$id.",'".$fecha2."')";

	$resultados = sqlsrv_query($con,$query);

	if( $resultados == false )  
	{  
    	die(print_r( sqlsrv_errors(),true));
	}else{
		echo 2;
	}
?> 