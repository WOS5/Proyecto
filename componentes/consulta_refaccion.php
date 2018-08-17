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
		<h2>Tabla Refacciones</h2>
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
					<th>folio_refaccion</th>
					<th>descripcion_rerfaccion</th>
					<th>existencia_refaccion</th>
					<th>nombre_catalogo</th>
					<th>nombre_proveedor</th>
					<th>Modificar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<?php
				$query="select * from Refacciones";

				$resultados=sqlsrv_query($con,$query);
				while($row=sqlsrv_fetch_array($resultados)){
					$folio_refaccion=$row['folio_refaccion'];
					$descripcion_refaccion=$row['descripcion_refaccion'];
					$existencia_refaccion=$row['existencia_refaccion'];
					$id_catalogo=$row['id_catalogo'];
					$id_prov=$row['id_prov'];

					$resultados2=sqlsrv_query($con,"select Catalogos.id_catalogo, subCategorias.nombre_subcategoria from Catalogos inner join subCategorias on Catalogos.id_subcategoria = subCategorias.id_subcategoria where Catalogos.id_catalogo=".$id_catalogo."");
					for($i=0;$i<$row=sqlsrv_fetch_array($resultados2);$i++){
					$nombre_subcategoria = $row["nombre_subcategoria"];                
    				}

    				$resultados3=sqlsrv_query($con,"select nombre_prov from proveedores where id_prov=".$id_prov."");
					for($i=0;$i<$row=sqlsrv_fetch_array($resultados3);$i++){
					$nombre_prov = $row["nombre_prov"];                
    				}

					$datos=$folio_refaccion."||".$descripcion_refaccion."||".$existencia_refaccion."||".$nombre_subcategoria."||".$nombre_prov;
			?>
			<tbody>
			<tr>
				<td><?php echo $folio_refaccion ?></td>
				<td><?php echo $descripcion_refaccion ?></td>
				<td><?php echo $existencia_refaccion ?></td>
				<td><?php echo $nombre_subcategoria ?></td>
				<td><?php echo $nombre_prov ?></td>
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="modificadato('<?php echo $datos?>')"></button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?php echo $folio_refaccion ?>')">		
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