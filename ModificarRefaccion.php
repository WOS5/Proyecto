<?PHP
$folio_refaccion=$_GET['folio_refaccion'];
include ("conexion_bd.php");
 
$banderaconexion=true;
if($con){
    echo "conexcion exitosa <br>";
}else{
    echo "conexion fallida <br>";
    $banderaconexion=false;
}
if($banderaconexion==true){
    echo "ejecutando consulta <br>";
    $query="select * from usuarios where folio_refaccion=".$folio_refaccion."";
    $resultados=sqlsrv_query($con,$query);
$i=0;
    
	while($i< $row= sqlsrv_fetch_array($resultados)){
	$folio_refaccion=$_GET['folio_refaccion'];
	$descripcion_refaccion=$_GET ['descripcion_refaccion'];
	$existencia_refaccion= $_GET['existencia_refaccion'];
	$id_catalogo=$_GET ['id_catalogo'];
	$id_prov= $_GET['id_prov'];
}
}
?>
<HTML>
	<HEAD> 
	 </HEAD>
	<BODY>
		<H1>Modulo Modificar</H1>
		<FORM ACTION ="Control_Modificar.php" METHOD = "Post">
		<LABEL> Folio: </LABEL>
		<INPUT TYPE ="TEXT" NAME= "folio_refaccion"
		VALUE= <?PHP ECHO "".$folio_refaccion."" ?> READONLY = READONLY />
		<BR>
		
		<LABEL> Descripcion: </LABEL>
		<INPUT TYPE ="TEXT" NAME= "descripcion_refaccion"
		VALUE= <?PHP ECHO "".$descripcion_refaccion."" ?> ENABLED />
		<BR>
		
		<LABEL> Existencia refaccion: </LABEL>
		<INPUT TYPE ="TEXT" NAME= "existencia_refaccion"
		VALUE= <?PHP ECHO "".$existencia_refaccion."" ?> ENABLED />
		<BR>
		
		<LABEL> id catalogo: </LABEL>
		<INPUT TYPE ="TEXT" NAME= "id_catalogo"
		VALUE= <?PHP ECHO "".$id_catalogo."" ?> ENABLED />
		<BR>
		
		<LABEL> id prov: </LABEL>
		<INPUT TYPE ="TEXT" NAME= "id_prov"
		VALUE= <?PHP ECHO "".$id_prov."" ?> ENABLED />
		<BR>
		
		
		
		
		<!--BOTON DE ENVIO!-->
		<INPUT TYPE = "SUBMIT" VALUE = "Modificar"/>
		</form>
	</BODY>
	
</HTML>
	 
	