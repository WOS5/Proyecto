<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones_Modelos.js"></script>
  <script src="librerias/bootstrap/js/bootstrap.js"></script>
  <script src="librerias/alertifyjs/alertify.js"></script>
</head>
<style type="text/css">
  head{
    color: white;
  }
  body{
    background-image: white;
    background-repeat: no-repeat;
    background-size: 1366px 768px;
  }
  table{
    background-color: #d5d8dc;
    text-align: center;
    width: 100%;
  }

  th{
    text-align: center;
  }

  thead{
    background-color: #3f62b2;
    border-bottom: solid 5px  #103487;
    color: white;
  }

  tr:hover td{
    background-color: #1a5ffd;
    color: white;
  }
</style>
  <div class="container">
    <div id="tabla"></div>
  </div>


  <!-- modal registro nuevo -->
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Modelo</h4>
      </div>
      <div class="modal-body">
        <label>id_modelo</label>
        <input type="text" name="" id="id" class="form-control input-sm">
        <label>descripcion_modelo</label>
        <input type="text" name="" id="descripcion" class="form-control input-sm">
        <label>id_marca</label>
        <select name="id_marca" id="marca" class="form-control input-sm">
          <?php
            include("php/conexion_bd.php");
            $query="select * from Marcas";
            $resultado = sqlsrv_query($con,$query);
            if ($resultado){
              while($renglon = sqlsrv_fetch_array($resultado))
              {
                $valor=$renglon['nombre_marca'];
                echo "<option value='".$renglon['id_marca']."'>".$valor."</option>\n";
              }
              }
          ?>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
          Agregar
        </button>
      </div>
    </div>
  </div>
</div>

<!-- modal edicion de datos -->
<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modificar</h4>
      </div>
      <div class="modal-body">
        <label>Id_modelo</label>
        <input type="text" name="" id="idu" class="form-control input-sm" readonly="readonly">
        <label>descripcion_modelo</label>
        <input type="text" name="" id="descripcionu" class="form-control input-sm">
        <label>id_marca</label>
        <select name="nombre_ciudad" id="marcau" class="form-control input-sm">
          <?php
            include("php/conexion_bd.php");
            $query="select * from Marcas";
            $resultado = sqlsrv_query($con,$query);
            if ($resultado){
              while($renglon = sqlsrv_fetch_array($resultado))
              {
                $valor=$renglon['nombre_marca'];
                echo "<option value='".$renglon['id_marca']."'>".$valor."</option>\n";
              }
              }
          ?>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/consulta_Modelos.php');
	});
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#guardarnuevo').click(function(){
      id=$('#id').val();
      descripcion=$('#descripcion').val();
      marca=$('#marca').val();
      agregardatos(id,descripcion,marca);
    });

    $('#actualizadatos').click(function(){
      actualizaDatos();
    });
  });
</script>