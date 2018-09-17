<?
	/***************************************************************************
	   Create Date:	Sun April 12, 2014  13h33
	   Author:		James Van Leuven
	   File:		db_conn.php
	   Description:	PHP 5.5.11 SQL Server Connection String
	********************************* SQLSRV *********************************/
	$connectionInfo = array(
		"UID"=> SQLSRV_UID
		, "PWD"=> SQLSRV_PWD
		, "Database"=> SQLSRV_DB
		, "CharacterSet" => SQLSRV_ENC_CHAR
		, "CharacterSet" => "UTF-8"
		, "ReturnDatesAsStrings" => 1
	);

	$conn = sqlsrv_connect( SQLSRV_SVR, $connectionInfo );

	if( !$conn ) {
		 echo "Connection could not be established.<br /><pre>";
		 die( print_r( sqlsrv_errors(), true));
		 echo "</pre>";
	}
