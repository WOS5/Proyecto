<html>
    <head>
    </head>
<img src=registro.png width=60 height=60>
<?PHP



	$folio_refaccion=$_POST["folio_refaccion"];
	$descripcion_refaccion=$_POST["descripcion_refaccion"];
	$existencia_refaccion=$_POST["existencia_refaccion"];
	$id_catalogo=$_POST ["id_catalogo" ];
	$id_prov= $_POST["id_prov"];

include ("conexion_bd.php");

//conectarme a la bd
$bandera_conexion=true;
//$conexion= sqls_connect($servername,$username,$password,$database);

//validar conexion
if($con){
	echo  "Conexion exitosa a la BD </br>";
} else{
	echo "Conexion fallida a la BD </br>";
	
	$bandera_conexion=false;
}

IF($bandera_conexion==true){
	ECHO "Ejecutando Consulta </br>";
	
	$query="INSERT INTO refacciones(folio_refaccion, descripcion_refaccion, existencia_refaccion, id_catalogo, id_prov) 
	VALUES ('".$folio_refaccion."','".$descripcion_refaccion."','".$existencia_refaccion."','".$id_catalogo."','".$id_prov."');";
	echo $query."</br>";
    $resultado=sqlsrv_query($con,$query);
	
	if($resultado){
		ECHO "<h1>Refaccion Registrada <h1></br>";
        ECHO "<h2>Redireccionando.... </h2></br>";
	header ("refresh: 1 url= http://localhost:90/proyecto/refaccion.php");
		
	}
}
ELSE{
	ECHO "No ejecutaria ninguna consulta </br>";
}

?>
</html>