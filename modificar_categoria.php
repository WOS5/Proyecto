<?php
	$id_categoria = $_GET['id_categoria'];

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

		$query ="select * from categorias where id_categoria=".$id_categoria."";
		$resultados = sqlsrv_query($con, $query);

		$i=0;
		while($i< $row = sqlsrv_fetch_array($resultados)) {
  			$nombre_categoria =$row["nombre_categoria"];
		}
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>CATEGORIA</title>
	</head>
	<body>
	<form action="enviar_consulta_categoria.php" method="POST">
		<label>id_categoria:</label><br>
		<input type="text" name="id_categoria" value = <?php echo "".$id_categoria."" ?> readonly="readonly"><br>

		<label>nombre_categoria:</label><br>
		<input type="text" name="nombre_categoria" value = <?php echo "'".$nombre_categoria."'" ?> placeholder="Ingrese nombre" required>*<br>
		<input type="submit" value="enviar"/>
	</form>
	</body>
</html>