<?php
  	$id_categoria= $_POST['id_categoria'];
  	$nombre_categoria = $_POST['nombre_categoria'];

  	include("conexion_bd.php");

	$banderaconexion = true;

	if($con){
		ECHO "Conexion exitosa <BR>";
	}else{
		ECHO "Conexion fallida <BR>";
		$banderaconexion = false;
	}

	if ($banderaconexion == true){
		ECHO "Ejecutando consulta <BR>";

		$query ="UPDATE categorias SET nombre_categoria='".$nombre_categoria."'where id_categoria=".$id_categoria."";
		
		ECHO $query."<BR>";

		$resultados = sqlsrv_query($con, $query);

		$banderaconsulta = true;
		if($resultados) {
	 		ECHO "Consulta ejecutada con exito";
	 		header("refresh:0.5 url=http://localhost:90/proyecto/consulta_categoria.php");
		}else{
			ECHO "Consulta fallida <BR>";
			$banderaconsulta = false;
		}
	}
?>