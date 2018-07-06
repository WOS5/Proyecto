<!--Tabla con base de datos !-->
<HTML>
	<HEAD> 
		<TITLE> Consultas de Usuarios </TITLE>
		<BODY >
		<font color=#008E97><h1> Registros de Usuarios </h1></font>
		<?PHP
		//1.CONECTAR BD
		//1.1 VARIABLES DE CONEXION
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
			
			//2. ejecutando consulta
			
			if($bandera_conexion== true){
				//ECHO "ejecutando el query </BR>";
				//2.1 estableciendo el query a ejecutar
				
				$query = "SELECT * FROM usuarios" ;
				
				//ECHO $query."</BR>";
				//2.2 ejecutando consulta 
				$bandera_resultados= true;
				$resultados = mysqli_query($conexion, $query);
				if($resultados){//si hubo resultados
				//ECHO "Consulta ejecutada con exito </BR>";
					}else {
						echo "Consulta fallida </br>";
						$bandera_resultados=false;
					}
				}else {
					echo "query no ejecutado por falla conexion </BR>";
				}
				if($bandera_resultados == true){
					$resultados_a_imprimir= mysqli_num_rows($resultados);
					echo "Imprimiendo ".$resultados_a_imprimir." resultados </br>";
				
				//2.3 imprimiendo resultados_a_imprimir
				echo "<table border=1 bgcolor=#EDFDFE>";

			ECHO "<TH> id_usuario </TH>";
			ECHO "<TH> nombre_usuario </TH>";
			ECHO "<TH> apellido_usuario </TH>";
			ECHO "<TH> tipo_usuario </TH>";
			ECHO "<TH> contrasenia </TH>";
			
			ECHO "<TH> Modificar </TH>";
			ECHO "<TH> Eliminar </TH>";	
			
			for ($i=0; $i<= $row = mysqli_fetch_array($resultados, MYSQLI_ASSOC); $i++) {
			$id_usuario = $row ['id_usuario'];
			$nombre_usuario = $row ['nombre_usuario'];
			$apellido_usuario = $row ['apellido_usuario'];
			$tipo_usuario = $row ['tipo_usuario'];
			$contrasenia = $row ['contrasenia'];	
			
			echo"<tr>";
			ECHO "<TD>".$id_usuario. "</TD>";
			ECHO "<TD>".$nombre_usuario. "</TD>";
			ECHO "<TD>".$apellido_usuario. "</TD>";
			ECHO "<TD>".$tipo_usuario. "</TD>";
			ECHO "<TD>".$contrasenia. "</TD>";
			
			ECHO "<TD> <a href= 'ModificarUsu.php?id_usuario=".$id_usuario."&nombre_usuario=".$nombre_usuario."
			&apellido_usuario=".$apellido_usuario."
			&tipo_usuario=".$tipo_usuario."&contrasenia=".$contrasenia."'>Modificar </a> </TD>";
			
			ECHO "<TD> <a href= 'EliminarUsu.php?id_usuario=".$id_usuario."'>Eliminar</a></TD>";
				}
				
				echo "</table>";
				}else {
					echo "falla en la impresion de resultados </br>";
				}
				
	?>
	<br>
	  <div align="BOTTOM"> <a href="MenuInicio.html"> <img src=Regresar.png width=60 height=60> </a></div>
	  
	
		</BODY>
	</HEAD>
		
</HTML>