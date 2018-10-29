<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="ss_portal_new";

	// $conn = mysqli_connect($servername, $username, $password, $dbname);

	$conn = mysqli_connect($servername, $username, $password);

	if (!$conn) 
	{
		$error = 'Unable to connect to the database server. ';
		include '../includes/error.html.php';
		exit();
	}

	if (!mysqli_set_charset ($conn, 'utf8')) 
	{
		$error = 'Unable to set database connection encoding. ';
		include '../includes/error.html.php';
		exit();
	}
	
	if (!mysqli_select_db ($conn, $dbname)) 
	{
		$error = 'Unable to locate the portal_old database. ';
		include '../includes/error.html.php';
		exit();
	}