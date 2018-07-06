<img src=eliminar.png width=100 height=100>
<?PHP
		///Eliminar Tabla Beca
	$folio_refaccion=$_GET['folio_refaccion'];
	ECHO "<h3>DATO A ELIMINAR: ".$folio_refaccion."</h3><BR>";
	include ("conexion_bd.php");

		$bandera_conexion = true;
	
		if($con){
			
			//ECHO "conexion exitosa :) </BR>";
		
			}else{
				ECHO "Conexion Fallida: ) </BR>";
				$bandera_conexion= false;
			}
			
			//2. ejecutando consulta
			
			if($bandera_conexion== true){
				//ECHO "ejecutando el query </BR>";
				//2.1 estableciendo el query a ejecutar
				
				$query= "DELETE FROM refacciones WHERE folio_refaccion=".$folio_refaccion."";
				//ECHO $query."</BR>";
				//2.2 ejecutando consulta 
				$bandera_resultados= true;
				$resultados = sqlsrv_query($con, $query);
				
				if($resultados){//si hubo resultados
				ECHO "<h1>Dato Eliminado </H1> ";
				ECHO "<h2>Redireccionando ...</h2></BR>";
					header ("refresh: 1 url= http://localhost:90/proyecto/refaccion.php");
					}else {
						echo "Consulta fallida </br>";
						$bandera_resultados=false;
					}
				}else {
					echo "query no ejecutado por falla conexion </BR>";
				}
?>