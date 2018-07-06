<!--Tabla con base de datos !-->
<HTML>
	<HEAD> 
		<TITLE> Consultas de Refacciones </TITLE>
		<BODY >
		<font color=#008E97><h1> Registros de Refacciones </h1></font>
		<?PHP
		//1.CONECTAR BD
		//1.1 VARIABLES DE CONEXION
		//$servername = "localhost";
		//$usernemae = "root";
		//$password = "";
		//$database = "proyecto";
		include ("conexion_bd.php");
            
		//1.2 Conectarme a la bdempleados
		$bandera_conexion = true;
		//$conexion = mysqli_connect($servername, $usernemae, $password, $database);
		//1.3 VALIDAR CONEXION
		if($con){
			
			//ECHO "conexion exitosa :) </BR>";
		
			}else{
				//ECHO "Conexion Fallida: ) </BR>";
				$bandera_conexion= false;
			}
			
			//2. ejecutando consulta
			
			if($bandera_conexion== true){
				//ECHO "ejecutando el query </BR>";
				//2.1 estableciendo el query a ejecutar
				
				$query = "SELECT * FROM refacciones" ;
				
				//ECHO $query."</BR>";
				//2.2 ejecutando consulta 
				$bandera_resultados= true;
				$resultados = sqlsrv_query($con, $query);
                $resultados2 = sqlsrv_query($con, $query);
				
             
                
                if($resultados){//si hubo resultados
				ECHO "Consulta ejecutada con exito </BR>";
					}else {
						echo "Consulta fallida </br>";
						$bandera_resultados=false;
					}
				}else {
					echo "query no ejecutado por falla conexion </BR>";
				}
				if($bandera_resultados == true){
					$resultados_a_imprimir= sqlsrv_num_rows($resultados);
					echo "Imprimiendo ".$resultados_a_imprimir." resultados </br>";
				for($i=0; $i<$resultados_a_imprimir;$i++){
                    
                }
                }else {
					echo "falla en la impresion de resultados </br>";
				}
				//2.3 imprimiendo resultados_a_imprimir
				echo "<table border=1 bgcolor=#EDFDFE>";
					
			ECHO "<TH> folio_refaccion </TH>";
			ECHO "<TH> descripcion_refaccion </TH>";
			ECHO "<TH> existencia_refaccion </TH>";
			ECHO "<TH> id_catalogo </TH>";
			ECHO "<TH> id_prov </TH>";	
			ECHO "<TH> Modificar </TH>";
			ECHO "<TH> Eliminar </TH>";	
			
			for ($i=0; $i<= $row = sqlsrv_fetch_array($resultados); $i++) {
			$folio_refaccion = $row ['folio_refaccion'];
			$descripcion_refaccion = $row ['descripcion_refaccion'];
			$existencia_refaccion = $row ['existencia_refaccion'];
			$id_catalogo= $row ['id_catalogo'];
			$id_prov = $row ['id_prov'];
			
			
			echo"<tr>";
			ECHO "<TD>".$folio_refaccion. "</TD>";
			ECHO "<TD>".$descripcion_refaccion. "</TD>";
			ECHO "<TD>".$existencia_refaccion. "</TD>";
			ECHO "<TD>".$id_catalogo. "</TD>";
			ECHO "<TD>".$id_prov. "</TD>";
			
			ECHO "<TD> <a href= 'ModificarRefaccion.php?folio_refaccion=".$folio_refaccion."&descripcion_refaccion=".$descripcion_refaccion."&existencia_refaccion=".$existencia_refaccion."&id_catalogo=".$id_catalogo."&id_catalogo=".$id_catalogo."&id_prov=".$id_prov."'>Modificar </a> </TD>";
			ECHO "<TD> <a href= 'Eliminar_refaccion.php?folio_refaccion=".$folio_refaccion."'>Eliminar</a></TD>";
				}
				
				echo "</table>";
				
				
	?>
	<br>
	  <div align="BOTTOM"> <a href="http://localhost:90/proyecto/formulario_refaccion.php"> <img src=Regresar.png width=60 height=60> </a></div>
	  
	
		</BODY>
	</HEAD>
		
</HTML>