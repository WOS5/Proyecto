<?php 
	$id_categoria = $_GET["id_categoria"];
	echo "<h1>Modulo eliminar</h1>";
	include("conexion_bd.php");
	if($con){
		echo "Conexion establecida";
		echo "<br>";
		$query="delete from categorias where id_categoria=".$id_categoria;
		echo $query;	
		$resultado=sqlsrv_query($con, $query);
		if ($resultado) {
			echo "<br>Se ha eliminado el registro con id=".$id_usuario;
			header("refresh:0.5 url=http://localhost:90/proyecto/consulta_categoria.php");
		} else {
			echo "No se ha eliminado nada";
		}
	}else{
		echo "No se pudo :´v";
	}

 ?>