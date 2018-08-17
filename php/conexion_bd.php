<?php
	$serverName = "DESKTOP-7ICCPQS";
	$connectionInfo = array( "Database"=>"bd_proyecto2", "UID"=>"admin", "PWD"=>"ponjo" );
	$con = sqlsrv_connect( $serverName, $connectionInfo );

	if( $con ){
		
	}else{
		echo "Connection could not be established.<br/>";
		die( print_r( sqlsrv_errors(), true));
	}
?>