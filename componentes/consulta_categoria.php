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
		<h2>Tabla Categoria</h2>
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
			<br>
			</br>
			<div id="div1">
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>id_categoria</th>
					<th>nombre_categoria</th>
					<th>Modificar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tfoot>
				
			</tfoot>
			<tbody>
			<?php
				$query="select * from categorias";

				$resultados=sqlsrv_query($con,$query);
				while($row=sqlsrv_fetch_array($resultados)){
					$id_categoria=$row['id_categoria'];
					$nombre_categoria=$row['nombre_categoria'];

					$datos=$id_categoria."||".$nombre_categoria;
			?>
			<tr>
				<td><?php echo $id_categoria ?></td>
				<td><?php echo $nombre_categoria ?></td>
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="modificadato('<?php echo $datos?>')"></button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?php echo $id_categoria ?>')">		
					</button>
				</td>
			</tr>
			<?php
				}
			?>
			</tbody>
		</table>
	</div>
	</div>
</div>
</div>