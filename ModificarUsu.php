<?PHP
	
	$id_usuario=$_GET['id_usuario'];
	$nombre_usuario=$_GET ['nombre_usuario'];
	$apellido_usuario= $_GET['apellido_usuario'];
	$tipo_usuario=$_GET ['tipo_usuario'];
	$contrasenia= $_GET['contrasenia'];
	
	
?>
<HTML>
	<HEAD> 
	 </HEAD>
	<BODY>
		<H1>Modulo Modificar</H1>
		<FORM ACTION ="Control_ModificarUsu.php" METHOD = "Post">
		
		<LABEL> Id Usuario: </LABEL>
		<INPUT TYPE ="TEXT" NAME= "id_estudiante"
		VALUE= <?PHP ECHO $id_usuario ?> READONLY = READONLY />
		<BR>
		
		<LABEL> Nombre: </LABEL>
		<INPUT TYPE ="TEXT" NAME= "nombre_usuario"
		VALUE= <?PHP ECHO $nombre_usuario ?> ENABLED />
		<BR>
		
		<LABEL> Apellido: </LABEL>
		<INPUT TYPE ="TEXT" NAME= "apellido_usuario"
		VALUE= <?PHP ECHO $apellido_usuario ?> ENABLED />
		<BR>
		
		<LABEL> Tipo de Usuario: </LABEL>
		<INPUT TYPE ="TEXT" NAME= "tipo_usuario"
		VALUE= <?PHP ECHO $tipo_usuario ?> ENABLED />
		<BR>
		
		<LABEL> Contrasenia: </LABEL>
		<INPUT TYPE ="TEXT" NAME= "contrasenia"
		VALUE= <?PHP ECHO $contrasenia ?> ENABLED />
		<BR>
		
		
		<!--BOTON DE ENVIO!-->
		<INPUT TYPE = "SUBMIT" VALUE = "ModificarUsu"/>
		</form>
	</BODY>
	
</HTML>