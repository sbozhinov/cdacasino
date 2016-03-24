<?php

	// dev server
	//$db_host = 'localhost';
	//$db_username = 'root';
	//$db_password = '';
	//$db_dbname = 'devcdaca_event';
	
	// staging server
	$db_host = 'localhost';   //default
	$db_username = 'devcdaca';
	$db_password = 'Rm&wk&6yU4Tq';
        $db_dbname = 'devcdaca_event';

	//databaseconnection
	$link = mysql_connect($db_host, $db_username, $db_password);
        $db_selected = mysql_select_db($db_dbname, $link);
?>