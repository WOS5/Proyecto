<?php
	$serverName = "LAPTOP-5VNI923P\SQLEXPRESS";
	$connectionInfo = array( "Database"=>"proyecto", "UID"=>"admin", "PWD"=>"ponjo" );
	$con = sqlsrv_connect( $serverName, $connectionInfo );

	if( $con ){
		echo "connection established.<br/>";
	}else{
		echo "Connection could not be established.<br/>";
		die( print_r( sqlsrv_errors(), true));
	}
?>