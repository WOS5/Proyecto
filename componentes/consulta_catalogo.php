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
		<h2>Tabla Catalogo</h2>
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
					<th>id_catalogo</th>
					<th>id_vehiculo</th>
					<th>id_subCategoria</th>
					<th>Modificar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<?php
				$query="select * from almacenes";

				$resultados=sqlsrv_query($con,$query);
				while($row=sqlsrv_fetch_array($resultados)){
					$id_alm=$row['id_alm'];
					$nombre_alm=$row['nombre_alm'];
					$id_ciudad=$row['id_ciudad'];

					$resultados2=sqlsrv_query($con,"select nombre_ciudad from ciudad where id_ciudad='".$id_ciudad."'");
					for($i=0;$i<$row=sqlsrv_fetch_array($resultados2);$i++){
					$nombre_ciudad = $row["nombre_ciudad"];                
    				}

					$datos=$id_alm."||".$nombre_alm."||".$id_ciudad;
			?>
			<tbody>
			<tr>
				<td><?php echo $id_alm ?></td>
				<td><?php echo $nombre_alm ?></td>
				<td><?php echo $nombre_ciudad ?></td>
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="modificadato('<?php echo $datos?>')"></button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?php echo $id_alm ?>')">		
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