<?php
/**
* 
* connection with database
* 
*/
	session_start();
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

	$_POST = $_POST["register"];
	$username = $_POST["username"];
	$fullname = $_POST["fullname"];
	$email = $_POST["email"];
	$dept = $_POST["dept"];
	$type = $_POST["type"];
	$id = $_POST['id'];
	
	/* echo $username;
	echo "</br>";
	echo $fullname;
	echo "</br>";
	echo $email;
	echo "</br>";
	echo $dept;
	echo "</br>";
	echo $type; */
	
	$sql = "UPDATE register
		SET username = '$username',  fullname = '$fullname' , email = '$email' , dept = '$dept', type = '$type'
		WHERE id = '$id'";
		
	if (!mysql_query($sql,$location))
	{
		die('Error:'  . mysql_error());
	}

	$_SESSION['success'] = "Register updated successfully";
	header('Location: user.php');
?>