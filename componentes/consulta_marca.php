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
		<h2>Tabla Marcas</h2>
		<table class="table table-hover">
			<caption>
				<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
					Agregar nuevo
					<span class="glyphicon glyphicon-plus"></span>
				</button>
				<button class="btn btn-warning" data-toggle="modal" data-target="#modalNuevo">
					Regresar
					<span class="glyphicon glyphicon-arrow-left"></span>
				</button>
			</caption>
			<thead>
				<tr>
					<th>id_marca</th>
					<th>nombre_marca</th>
					<th>Modificar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<?php
				$query="select * from Marcas";

				$resultados=sqlsrv_query($con,$query);
				while($row=sqlsrv_fetch_array($resultados)){
					$id_marca=$row['id_marca'];
					$nombre_marca=$row['nombre_marca'];

					$datos=$id_marca."||".$nombre_marca;
			?>
			<tbody>
			<tr>
				<td><?php echo $id_marca ?></td>
				<td><?php echo $nombre_marca ?></td>
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="modificadato('<?php echo $datos?>')"></button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?php echo $id_marca ?>')">		
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