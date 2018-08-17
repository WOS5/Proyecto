<?php
	include("../php/conexion_bd.php");

	$nombre=$_POST['nombre'];
	$categoria=$_POST['categoria'];

	$query ="INSERT INTO subCategorias (nombre_subcategoria,id_categoria) VALUES ('".$nombre."',".$categoria.")";

	$resultados = sqlsrv_query($con,$query);

	if( $resultados == false )  
	{  
    	echo 1;
	}else{
		echo 2;
	}

?>