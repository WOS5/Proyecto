<!DOCTYPE html>
<html>
<ul class="nav">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">

        <a class="navbar-brand js-scroll-trigger" href="index.html">Proyecto</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Acerca de nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Autopartes</a>
        <ul>
            <li><a href="catalogo.php">Catalogos</a></li>
            <li><a href="categoria.php">Categorias</a></li>
            <li><a href="subCategoria.php">SubCategorias</a></li>
            <li><a href="refaccion.php">Refacciones</a></li>
            <li><a href="tipoMotor.php">Tipo de Motores</a></li>
            <li><a href="marca.php">Marcas</a></li>
            <li><a href="anios.php">Años</a></li>
            </li>
        </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Ventas</a>
            <ul>
            <li><a href="entrada.php">Entradas</a></li>
            <li><a href="salida.php">Salidas</a></li>
            <li><a href="devolucion.php">Devoluciones</a></li>
            
      </ul>
      </li>
      <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contactos</a>
            <ul>
            <li><a href="http://localhost/s131/ProyectoFinal%20Software/Modulos%20Insertar/beca.php">Proveedores</a></li>
            <li><a href="http://localhost/s131/ProyectoFinal%20Software/Tabla%20beca/beca.php">Ciudades</a></li>
            <li><a href="estado.php">Estados</a></li>
            <li><a href="almacen.php">Almacenes</a></li>
          </ul>
      </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="ftp://192.168.1.31" target="_blank">FTP</a>
            </li>
          </ul>
      
        </div>
      </div>
    </nav>
  </ul>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones_estado.js"></script>
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
  ul, ol {
        list-style:none;
      }
      
      .nav > li {
        float:left;
      }
      
      .nav li a {
        background-color:#FFFFFF;
        color:#2E2E2E;
        text-decoration:none;
        padding:10px 12px;
        display:block;
      }
      .nav li a:hover {
        background-color:#F79F81;
      }
      
      .nav li ul {
        display:none;
        position:absolute;
        min-width:140px;
      }
      
      .nav li:hover > ul {
        display:block;
      }
      
      .nav li ul li {
        position:relative;
      }
      
      .nav li ul li ul {
        right:-140px;
        top:0px;
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
        <h4 class="modal-title" id="myModalLabel">Agregar Estado</h4>
      </div>
      <div class="modal-body">
        <label>id_estado</label>
        <input type="text" name="" id="id" class="form-control input-sm">
        <label>Nombre_estado</label>
        <input type="text" name="" id="nombre" class="form-control input-sm">
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
        <label>Id_estado</label>
        <input type="text" name="" id="idu" class="form-control input-sm" readonly="readonly">
        <label>Nombre_estado</label>
        <input type="text" name="" id="nombreu" class="form-control input-sm">
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
		$('#tabla').load('componentes/consulta_estado.php');
	});
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#guardarnuevo').click(function(){
      id=$('#id').val();
      nombre=$('#nombre').val();
      agregardatos(id,nombre);
    });

    $('#actualizadatos').click(function(){
      actualizaDatos();
    });
  });
</script>