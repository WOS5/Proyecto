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
		<h2>Tabla subCategoria</h2>
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
					<th>id_subCategoria</th>
					<th>nombre_subCategoria</th>
					<th>nombre_categoria</th>
					<th>Modificar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<?php
				$query="select * from subCategorias";

				$resultados=sqlsrv_query($con,$query);
				while($row=sqlsrv_fetch_array($resultados)){
					$id_subcategoria=$row['id_subcategoria'];
					$nombre_subcategoria=$row['nombre_subcategoria'];
					$id_categoria=$row['id_categoria'];

					$resultados2=sqlsrv_query($con,"select nombre_categoria from categorias where id_categoria='".$id_categoria."'");
					for($i=0;$i<$row=sqlsrv_fetch_array($resultados2);$i++){
					$nombre_categoria = $row["nombre_categoria"];                
    				}

					$datos=$id_subcategoria."||".$nombre_subcategoria."||".$id_categoria;
			?>
			<tbody>
			<tr>
				<td><?php echo $id_subcategoria ?></td>
				<td><?php echo $nombre_subcategoria ?></td>
				<td><?php echo $nombre_categoria ?></td>
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="modificadato('<?php echo $datos?>')"></button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?php echo $id_subcategoria ?>')">		
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