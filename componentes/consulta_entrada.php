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
		<h2>Tabla Entrada</h2>
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
					<th>folio_entrada</th>
					<th>fecha_entrada</th>
					<th>nombre_refaccion</th>
					<th>cantidad_salida</th>
					<th>nombre_almacen</th>
				</tr>
			</thead>
			<?php
				$query="select * from entradas";

				$resultados=sqlsrv_query($con,$query);
				while($row=sqlsrv_fetch_array($resultados)){
					$folio_entrada=$row['folio_entrada'];
					$fecha_entrada=$row['fecha_entrada'];
					$folio_refaccion=$row['folio_refaccion'];
					$cantidad=$row['cantidad'];
					$id_alm=$row['id_alm'];

					$resultados2=sqlsrv_query($con,"select * from Refacciones where folio_refaccion=".$folio_refaccion."");
					for($i=0;$i<$row=sqlsrv_fetch_array($resultados2);$i++){
					$descripcion_refaccion = $row["descripcion_refaccion"];                
    				}

    				$resultados3=sqlsrv_query($con,"select * from almacenes where id_alm=".$id_alm."");
					for($i=0;$i<$row=sqlsrv_fetch_array($resultados3);$i++){
					$nombre_alm = $row["nombre_alm"];                
    				}

    				$fecha = date_format($fecha_entrada,"Y-m-d");

					$datos=$folio_entrada."||".$fecha."||".$descripcion_refaccion."||".$cantidad."||".$nombre_alm;
			?>
			<tbody>
			<tr>
				<td><?php echo $folio_entrada ?></td>
				<td><?php echo $fecha ?></td>
				<td><?php echo $descripcion_refaccion ?></td>
				<td><?php echo $cantidad ?></td>
				<td><?php echo $nombre_alm ?></td>
			</tr>
			</tbody>
			<?php
				}
			?>
		</table>
	</div>
	</div>
</div>