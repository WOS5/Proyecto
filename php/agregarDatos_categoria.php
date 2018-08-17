<?php
	include("../php/conexion_bd.php");

	$nombre=$_POST['nombre'];

	$query ="INSERT INTO categorias (nombre_categoria) VALUES ('".$nombre."')";

	echo $resultados = sqlsrv_query($con,$query);

?>