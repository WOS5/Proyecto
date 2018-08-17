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
		<h2>Tabla Devolucion</h2>
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
					<th>folio_devolucion</th>
					<th>fecha_devolucion</th>
					<th>nombre_almacen</th>
					<th>observacion</th>
					<th>nombre_refaccion</th>
					<th>cantidad_devolucion</th>
				</tr>
			</thead>
			<?php
				$query="select * from devoluciones";

				$resultados=sqlsrv_query($con,$query);
				while($row=sqlsrv_fetch_array($resultados)){
					$folio_devolucion=$row['folio_devolucion'];
					$fecha_devolucion=$row['fecha_devolucion'];
					$id_alm=$row['id_alm'];
					$observacion_devolucion=$row['observacion_devolucion'];
					$folio_salida=$row['folio_salida'];
					$cantidad=$row['cantidad'];


					$resultados2=sqlsrv_query($con,"select * from almacenes where id_alm=".$id_alm."");
					for($i=0;$i<$row=sqlsrv_fetch_array($resultados2);$i++){
					$nombre_alm = $row["nombre_alm"];                
    				}

    				$resultados3=sqlsrv_query($con,"select Salidas.folio_salida, Refacciones.descripcion_refaccion, Salidas.cantidad_salida from Salidas inner join Refacciones on Salidas.folio_refaccion= Refacciones.folio_refaccion where Salidas.folio_salida=".$folio_salida."");
					for($i=0;$i<$row=sqlsrv_fetch_array($resultados3);$i++){

					$descripcion_refaccion = $row["descripcion_refaccion"];
					$cantidad_salida = $row['cantidad_salida'];                
    				$refaccion = $descripcion_refaccion." ".$cantidad_salida;

    				}


    				$fecha = date_format($fecha_devolucion,"Y-m-d");
			?>
			<tbody>
			<tr>
				<td><?php echo $folio_devolucion ?></td>
				<td><?php echo $fecha ?></td>
				<td><?php echo $nombre_alm ?></td>
				<td><?php echo $observacion_devolucion ?></td>
				<td><?php echo $refaccion ?></td>
				<td><?php echo $cantidad ?></td>
			</tr>
			</tbody>
			<?php
				}
			?>
		</table>
	</div>
	</div>
</div>