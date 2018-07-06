
<HTML>
	<HEAD>
	</HEAD>
	<BODY>
	<img src=usuario.png width=60 height=60>
	<font color=#00928D><H1>Nuevo Usuario</H1></font>
	<!--Formulario!-->
	<FORM ACTION= "insert_Usu.php" METHOD="POST">
	
	
		<LABEL>nombre_usuario:</LABEL>
		<INPUT TYPE= "TEXT" NAME= "nombre_usuario" >
		</BR>
		<LABEL>apellido_usuario:</LABEL>
		<INPUT TYPE="TEXT" NAME="apellido_usuario">
		</BR>
		<LABEL>tipo_usuario:</LABEL>
		<INPUT TYPE= "TEXT" NAME= "tipo_usuario" >
		</BR>
		<LABEL>contrasenia:</LABEL>
		<INPUT TYPE= "TEXT" NAME= "contrasenia" >
		</BR>	
		
		<!--boton de envio!-->
		<INPUT TYPE="SUBMIT" VALUE="enviar">
		
	</FORM>
		<a href="MenuInicio.html"><img src=regresar.png width=60 height=60></a>
	</BODY>
</HTML>