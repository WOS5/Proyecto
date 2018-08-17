<?php
	include("../php/conexion_bd.php");

	$id=$_POST['id'];
	$almacen=$_POST['almacen'];
	$observacion=$_POST['observacion'];
	$refaccion=$_POST['refaccion'];
	$cantidad=$_POST['cantidad'];

	$hoy = getdate();

	$fecha = "$hoy[year]-$hoy[mon]-$hoy[mday] $hoy[hours]:$hoy[minutes]:$hoy[seconds]";

	$fecha = date("d-m-Y");

	$query ="exec insertdevo ".$id.",'".$fecha."',".$almacen.",'".$observacion."',".$refaccion.",".$cantidad."";

	$resultados = sqlsrv_query($con,$query);

	if( $resultados == false )  
	{  
    	echo 1;
	}else{
		echo 2;
	}

?>