<img src=modificar.png width=100 height=100>
<br>
<h2>Modificando dato...</h2>
<?PHP

	$id_usuario=$_POST['id_usuario'];
	$nombre_usuario=$_POST ['nombre_usuario'];
	$apellido_usuario= $_POST['apellido_usuario'];
	$tipo_usuario=$_POST ['tipo_usuario'];
	$contrasenia= $_POST['contrasenia'];
	

	//conectar a la bd
		$servername = "localhost";
		$usernemae = "root";
		$password = "";
		$database = "proyecto";
		//1.2 Conectarme a la bdempleados
		$bandera_conexion = true;
		$conexion = mysqli_connect($servername, $usernemae, $password, $database);
		//1.3 VALIDAR CONEXION
		if($conexion){
			//ECHO "conexion exitosa :) </BR>";
			}else{
				//ECHO "Conexion Fallida: ) </BR>";
				$bandera_conexion= false;
			}
			//ejecutando consulta
			if($bandera_conexion== true){
				
				
				Echo "ejecutando consulta<br>";
				$query= "UPDATE usuarios SET nombre_usuario='".$nombre_usuario"', 
				apellido_usuario='".$apellido_usuario."' 
				tipo_usuario='".$tipo_usuario."'
				contrasenia='".$contrasenia."' 
				WHERE id_usuario='".$id_usuario."'";
				
				
				Echo "ejecutando consulta<br>";
				$query= "UPDATE estudiante SET nombre_estudiante='".$nombre_estudiante."', 
				status='".$status."', 
				nivel_ingles='".$nivel_ingles."', 
				localidad='".$localidad."', 
				Correo='".$Correo."', 
				Universidad_L='".$Universidad_L."' 
				WHERE id_estudiante='".$id_estudiante."'";
				
					//echo $query."</br>";
				
				mysqli_query($conexion, $query);
				header ("refresh: 1 url=tabla_usuario.php");
				
				
				}else{
					echo "No ejecutara ninguna consulta</BR>";
				}
				
				




?>