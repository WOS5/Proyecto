<img src=eliminar.png width=100 height=100>
<?PHP
		+
	$id_usuario=$_GET['id_usuario'];
	ECHO"<H3> DATO A ELIMINAR: ".$id_usuario."</H3>";
	
	//1.CONECTAR BD
		//1.1 VARIABLES DE CONEXION
		$servername = "localhost";
		$usernemae = "root";
		$password = "";
		$database = "proyecto";
		
		$bandera_conexion = true;
		$conexion = mysqli_connect($servername, $usernemae, $password, $database);
		
		if($conexion){
			
		
		
			}else{
				ECHO "Conexion Fallida: ) </BR>";
				$bandera_conexion= false;
			}
			
			
			if($bandera_conexion== true){
				
				$query= "DELETE FROM usuarios WHERE id_usuario=".$id_usuario."";
				$bandera_resultados= true;
				$resultados = mysqli_query($conexion, $query);
				
				if($resultados){//si hubo resultados
				ECHO "<h1>Dato Eliminado </H1> ";
				ECHO "<h2>Redireccionando ...</h2></BR>";
				
					header ("refresh: 5 url= http://localhost:90/ProyectoFinal/tabla_usuario.php");
					}else {
						echo "Consulta fallida </br>";
						$bandera_resultados=false;
					}
				}else {
					echo "query no ejecutado por falla conexion </BR>";
				}
?>