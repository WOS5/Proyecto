<img src=registro.png width=60 height=60>
<?PHP
// IMPLEMENTANDO METODO POST
//No concatena valores ni variables en la URL
//Siendo este mas seguro que Get 

	$id_usuario=$_POST['id_usuario'];
	$nombre_usuario=$_POST ['nombre_usuario'];
	$apellido_usuario= $_POST['apellido_usuario'];
	$tipo_usuario=$_POST ['tipo_usuario'];
	$contrasenia= $_POST['contrasenia'];




$servername="localhost";
$username="root";
$password="";
$database="proyecto";

//conectarme a la bd
$bandera_conexion=true;
$conexion= mysqli_connect($servername,$username,$password,$database);

//validar conexion
if($conexion){
	//echo  "Conexion exitosa a la BD </br>";
} else{
	echo "Conexion fallida a la BD </br>";
	
	$bandera_conexion=false;
}

IF($bandera_conexion==true){
	//ECHO "Ejecutando Consulta </br>";
	
	$query="INSERT INTO usuarios (id_usuario, nombre_usuario
	, apellido_usuario, tipo_usuario, contrasenia) VALUES (null, '".$nombre_usuario."', '".$apellido_usuario."', '".$tipo_usuario."', '".$contrasenia."');";
	//echo $query."</br>";
    $resultado=mysqli_query($conexion,$query);
	
	if($resultado){
		ECHO "<h1>Usuario Registrado </h1></br>";
        ECHO "<h2>Redireccionando.... </h2></br>";
	header("Refresh: 1 url=tabla_estudiante.php");
		
	}
}
ELSE{
	ECHO "No ejecutaria ninguna consulta </br>";
}

?>