<?php
	include("../php/conexion_bd.php");

	$id_modelo=$_POST['id'];
	$descripcion_modelo=$_POST['descripcion'];
	$id_marca=$_POST['marca'];

	$query ="INSERT INTO Modelos (id_modelo,descripcion_modelo,id_marca) VALUES (".$id_modelo.",'".$descripcion_modelo."',".$id_marca.")";

	$resultados = sqlsrv_query($con,$query);

	if( $resultados == false )  
	{  
    	echo 1;
	}else{
		echo 2;
	}

?>