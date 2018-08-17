<?php
	include("../php/conexion_bd.php");
?>
<style type="text/css">
	h2{
		color: black;
	}
</style>
<div class="row">
	<div class="table-responsive">
		<div class="col-sm-12">
		<h2>Tabla Modelos</h2>
		<table class="table table-hover">
			<caption>
				<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
					Agregar nuevo
					<span class="glyphicon glyphicon-plus"></span>
				</button>
				<button class="btn btn-warning" data-toggle="modal" data-target="#modalNuevo">
					Reporte
					<span class="glyphicon glyphicon-folder-open"></span>
				</button>
			</caption>
			<thead>
				<tr>
					<th>id_modelo</th>
					<th>descripcion_modelo</th>
					<th>id_marca</th>
					<th>Modificar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<?php
				$query="select * from Modelos";

				$resultados=sqlsrv_query($con,$query);
				while($row=sqlsrv_fetch_array($resultados)){
					$id_modelo=$row['id_modelo'];
					$descripcion_modelo=$row['descripcion_modelo'];
					$id_marca=$row['id_marca'];

					$resultados2=sqlsrv_query($con,"select nombre_marca from Marcas where id_marca='".$id_marca."'");
					for($i=0;$i<$row=sqlsrv_fetch_array($resultados2);$i++){
					$nombre_marca = $row["nombre_marca"];                
    				}

					$datos=$id_modelo."||".$descripcion_modelo."||".$id_marca;
			?>
			<tbody>
			<tr>
				<td><?php echo $id_modelo ?></td>
				<td><?php echo $descripcion_modelo ?></td>
				<td><?php echo $nombre_marca ?></td>
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="modificadato('<?php echo $datos?>')"></button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?php echo $id_modelo ?>')">		
					</button>
				</td>
			</tr>
			</tbody>
			<?php
				}
			?>
		</table>
	</div>
	</div>
</div>