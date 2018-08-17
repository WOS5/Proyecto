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
			$query="select * from usuarios";
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
			echo "No se ejecutará ninguna consulta";
		}
		
		echo "<table border=5>";
			echo "<th>id_usuario</th>";
			echo "<th>nombre_usuario</th>";
			echo "<th>apellido_usuario</th>";
			echo "<th>tipo_usuario</th>";
			echo "<th>contraseña</th>";
			echo "<th>Modificar</th>";
			echo "<th>Eliminar</th>";
			for ($i=0; $i < $row=sqlsrv_fetch_array($resultados); $i++) { 
				$id_usuario=$row['id_usuario'];
				$nombre_usuario=$row['nombre_usuario'];
				$apellido_usuario=$row['apellido_usuario'];
				$tipo_usuario=$row['tipo_usuario'];
				$contrasenia=$row['contrasenia'];
				echo "<tr>";
					echo "<td>".$id_usuario."</td>";
					echo "<td>".$nombre_usuario."</td>";
					echo "<td>".$apellido_usuario."</td>";
					echo "<td>".$tipo_usuario."</td>";
					echo "<td>".$contrasenia."</td>";
					echo "<td><a href='modificar_usuario.php?id_usuario=".$id_usuario."&nombre_usuario=".$nombre_usuario."&apellido_usuario=".$apellido_usuario."&tipo_usuario=".$tipo_usuario."&contrasenia=".$contrasenia."'><img src='update.png'></a></td>";
					echo "<td><a href='eliminar_usuario.php?id_usuario=".$id_usuario."'><img src='delete.png'></a></td>";
				echo "</tr>";
			}
		echo "</table>";
	 ?>
	 <form action="insertar_usuario.html" method="post">
  		<label />
   		<input type = "submit" value = "insertar"/>
	</form>
</body>
</html>