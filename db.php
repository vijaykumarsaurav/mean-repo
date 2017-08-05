<?php

	$dbHost = 'localhost';
	$dbUsername = 'root';
	$dbPassword = 'aaa';
	$dbName = 'angular_curd';

	$db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

	if ($db->connect_error) 
	{
    	die("Connection failed: " . $db->connect_error); 
	}
	date_default_timezone_set('Asia/Calcutta');
?>