<img src=registro.png width=60 height=60>
<html>
    <head>
         <title>Refacciones</title>
        
    </head>
    <body>
        <form ACTION= 'insert_refacciones.php' METHOD = "POST"
              
            ENCTYPE= 'multipart/form-data'>
             
            <!--CAJAS DE TEXTO!-->
			<LABEL>Folio: </LABEL>
			<INPUT TYPE="TEXT" NAME="folio_refaccion"/> 
            <br>
			<LABEL>Descripcion: </LABEL>
			<INPUT TYPE="TEXT" NAME="descripcion_refaccion"/> 
             <br>
			<LABEL>Existencia: </LABEL>
			<INPUT TYPE="TEXT" NAME="existencia_refaccion"/> 
             <br>
			<LABEL>Id_catalogo: </LABEL>
            <INPUT TYPE="TEXT" NAME="id_catalogo"/> 
             <br>	
            <LABEL>Id_prov: </LABEL>
            <INPUT TYPE="TEXT" NAME="id_prov"/> 
             <br>	
            <input TYPE= 'submit' value='ENVIAR' NAME= 'submit'/>
                 
        </form>
    </body>
</html>
