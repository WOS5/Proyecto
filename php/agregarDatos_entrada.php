<?php
	include("../php/conexion_bd.php");

	$id=$_POST['id'];
	$refaccion=$_POST['refaccion'];
	$cantidad=$_POST['cantidad'];
	$almacen=$_POST['almacen'];

	$hoy = getdate();

	$fecha = "$hoy[year]-$hoy[mon]-$hoy[mday] $hoy[hours]:$hoy[minutes]:$hoy[seconds]";

	$fecha = date("d-m-Y");

	$query ="exec insertentrada '".$id."','".$fecha."','".$refaccion."',".$almacen.",".$cantidad."";

	$resultados = sqlsrv_query($con,$query);

	if( $resultados == false )  
	{  
    	echo 1;
	}else{
		echo 2;
	}

?>