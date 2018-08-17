<?php
	include("../php/conexion_bd.php");

	$id=$_POST['id'];

	$nombre=$_POST['nombre'];

	$query ="UPDATE categorias SET nombre_categoria='".$nombre."'where id_categoria=".$id."";

	echo $resultados = sqlsrv_query($con,$query);

?>