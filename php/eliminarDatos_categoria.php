<?php
	include("../php/conexion_bd.php");

	$id=$_POST['id'];

	$query="delete from categorias where id_categoria=".$id;

	echo $resultado=sqlsrv_query($con, $query);
?>