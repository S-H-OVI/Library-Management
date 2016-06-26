<?php
/**
* 
* connection with database
* 
*/
	$db_host = 'localhost';
	$db_user = 'root';
	$db_password = '';
	$db_name ='librarymanagement';
	
	$location = mysql_connect($db_host, $db_user, $db_password);
	
	if (!$location) 
	{
		die('Not connected : ' . mysql_error());
	}                
	$db_selected = mysql_select_db($db_name, $location);
	if (!$db_selected) 
	{
		die ('Error : ' . mysql_error());
	}

/**
* 
* Take value sent from html form
* 
*/

	//$_POST = $_POST["register"]; //print_r($_POST);
	$username = $_POST["username"];
	$password = $_POST["password"];
	$fullname = $_POST["fullname"];
	$email = $_POST["email"];
	$dept = $_POST["dept"];
	$type = $_POST["type"];
	
	
	
/* 	echo $username;
	echo "</br>";
	echo $password;
	echo "</br>";
	echo $fullname;
	echo "</br>";
	echo $email;
	echo "</br>";
	echo $dept;
	echo "</br>";
	echo $type; */
	
	
	$sql = "INSERT INTO register(username, password, fullname, email, dept, type)
		VALUES('$username','$password', '$fullname', '$email', '$dept', '$type')";
	//print_r($sql);	
	if (!mysql_query($sql,$location))
	{
		die('Error:'  . mysql_error());
	}
	
	header('Location: user.php');
?>