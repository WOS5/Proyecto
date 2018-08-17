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
		<h2>Tabla Anios</h2>
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
					<th>id_anios</th>
					<th>descripcion_anio</th>
					<th>Modificar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<?php
				$query="select * from anios";

				$resultados=sqlsrv_query($con,$query);
				while($row=sqlsrv_fetch_array($resultados)){
					$id_anios=$row['id_anios'];
					$descripcion_anios=$row['descripcion_anios'];
	
					$datos=$id_anios."||".$descripcion_anios;
			?>
			<tbody>
			<tr>
				<td><?php echo $id_modelo ?></td>
				<td><?php echo $descripcion_modelo ?></td>
				
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="modificadato('<?php echo $datos?>')"></button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?php echo $id_anioso ?>')">		
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