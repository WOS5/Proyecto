<HTML>
  <HEAD>
  </HEAD>
<?php
  $nombre_categoria =$_POST["Nombre_categoria"];

  include("conexion_bd.php");

  $banderaconexion = true;

 if($con){
 ECHO "Conexion exitosa <BR>";
 }else{
   ECHO "Conexion fallida <BR>";
   $banderaconexion = false;
 }

 if ($banderaconexion == true){
 	ECHO "Ejecutando insercion <BR>";

  $query ="INSERT INTO categorias (nombre_categoria) VALUES ('".$nombre_categoria."')";

 	$resultados = sqlsrv_query($con,$query);

  ECHO $query."<BR>";

    if($resultados){
      echo "Insert exitoso";
      header('refresh:0.2 url=http://localhost:90/proyecto/consulta_categoria.php');
    }else{
      echo "Insert fallido";
    } 
}
?>
 </HTML>