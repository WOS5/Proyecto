<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		include("conexion_bd.php");

		$banderaconexion=true;

		if ($con) {
			echo "Conexion exitosa <br>";
		}else{
			echo "Conexion fallida <br>";
			$banderaconexion=false;
		}


		if($banderaconexion){
			echo "Ejecutando consulta</BR>";
			$query="select * from categorias";
			echo $query."<br>";
			$resultados=sqlsrv_query($con,$query);
			$resultados2=sqlsrv_query($con,$query);
			$banderaconsulta=true;

			if ($resultados) {
				echo "Consulta exitosa <br>";
			}else{
				echo "Consulta fallida <br>";
				$banderaconsulta=false;
			}
			
			if ($banderaconsulta) {
				echo "Imprimiendo consulta <br>";
				$num_filas=sqlsrv_num_rows($resultados);
				echo "Imprimiendo ".$num_filas." filas <br>";
				for ($i=0; $i < $num_filas; $i++) { 
					
				}
			} else {
				echo "No se imprimira nada";
			}
			

		}else{
			echo "No se ejecutará ninguna consulta, te la pelaste";
		}
		
		echo "<table border=5>";
			echo "<th>id_categoria</th>";
			echo "<th>nombre_categoria</th>";
			echo "<th>Modificar</th>";
			echo "<th>Eliminar</th>";
			for ($i=0; $i < $row=sqlsrv_fetch_array($resultados); $i++) { 
				$id_categoria=$row['id_categoria'];
				$nombre_categoria=$row['nombre_categoria'];
				echo "<tr>";
					echo "<td>".$id_categoria."</td>";
					echo "<td>".$nombre_categoria."</td>";
					echo "<td><a href='modificar_categoria.php?id_categoria=".$id_categoria."&nombre_categoria=".$nombre_categoria."'><img src='update.png'></a></td>";
					echo "<td><a href='eliminar_categoria.php?id_categoria=".$id_categoria."'><img src='delete.png'></a></td>";
				echo "</tr>";
			}
		echo "</table>";
	 ?>
	 <form action="insertar_categoria.html" method="post">
  		<label />
   		<input type = "submit" value = "insertar"/>
	</form>
</body>
</html>