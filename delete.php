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
	
	$location = mysql_pconnect($db_host, $db_user, $db_password);
	
	if (!$location) 
	{
		die('Not connected : ' . mysql_error());
	}                
	$db_selected = mysql_select_db($db_name, $location);
	if (!$db_selected) 
	{
		die ('Error : ' . mysql_error());
	}
  $id = $_GET['asdfg'];
  $query = "DELETE FROM register WHERE id = $id";	
	$result = mysql_query($query,$location);
	header('Location: user.php');
?>